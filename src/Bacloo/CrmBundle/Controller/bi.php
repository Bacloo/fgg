<?php

use Bacloo\CrmBundle\Entity\Articlesenvente;
use Bacloo\CrmBundle\Entity\Doca;
use Bacloo\CrmBundle\Entity\Factures;
use Bacloo\CrmBundle\Entity\Venda;
use Bacloo\CrmBundle\Form\DocaType;
use Bacloo\CrmBundle\Form\VendaType;

$user = $this->get('security.context')->getToken()->getUsername(); if(empty($user) or !isset($user) or $user == 'anon.'){return $this->redirect($this->generateUrl('fos_user_security_login'));}
$em = $this->getDoctrine()->getManager();
$userdetails  = $em->getRepository('BaclooUserBundle:User')
    ->findOneByUsername($user);
$today = date('Y-m-d');

$client  = $em->getRepository('BaclooCrmBundle:Fiche')
    ->findOneById($ficheid);

if($vendaid == 0)
{
    $venda = new Venda;
    $doca = new Doca;
    $totalvente = 0;
    $bdcrecu = 0;
    $venda->setUser($user);
    $venda->setTypevente('bi');
    $new = 1;
}
else
{
    $venda = $em->getRepository('BaclooCrmBundle:Venda')
        ->findOneById($vendaid);
    $bdcrecu = $venda->getBdcrecu();
    //FACTURATION
    $montantvente = 0;
    $totalvente = 0;
    foreach($venda->getVentes() as $ven)
    {
        $montantvente = $ven->getQuantite() * $ven->getPu();
        $totalvente += $ven->getQuantite() * $ven->getPu();
    }
    $new = 0;

    $doca  = $em->getRepository('BaclooCrmBundle:Doca')
        ->findOneBy(array('typedoc'=> 'bi', 'iddoc' => $vendaid));
    //FIN FACTURATION
}
$form = $this->createForm(new VendaType(), $venda);

$form2 = $this->createForm(new DocaType(), $doca);
$request = $this->get('request');
if ($request->getMethod() == 'POST')
{
    $form->bind($request);
    if($form->isValid()){
        $montantvente = 0;
        $totalvente = 0;
        foreach($form->get('ventes')->getData() as $ven)
        {echo  $ven->getPu();
            $montantvente = $ven->getQuantite() * $ven->getPu();
            $totalvente += $ven->getQuantite() * $ven->getPu();
            $ven->setMontantvente($montantvente);
            $ven->setCodifvente('entretien');
            $em->persist($ven);
            $em->flush();
            //MAJ Arricle
            if(null !== $ven->getRefarticle() or null !== $ven->getDescription())
            {
                $articles = $em->getRepository('BaclooCrmBundle:Articlesenvente')
                    ->findOneBy(array('reffrs' => $ven->getRefarticle()));
                if(isset($articles))
                {
                    $ven->setRefarticle($articles->getReffrs());
                    $em->persist($ven);
                    $em->flush();
                }
                else
                {
                    $article = new Articlesenvente;
                    $article->setReffrs($ven->getRefarticle());
                    $article->setDesignation($ven->getDescription());
                    $article->setPrixvente($ven->getPu());
                    $em->persist($article);
                    $em->flush();
                }
            }
        }//echo 'totalvete'.$totalvente;
        if(null === $venda->getDateinter())
        {
            $venda->setDateinter(date('Y-m-d'));
        }
        $venda->setMontantvente($totalvente);
        $em->persist($venda);
        $em->flush();
        $facture = $em->getRepository('BaclooCrmBundle:Factures')
            ->findOneByCodelocata('V-'.$venda->getId());

        if(isset($facture))
        {
            $facture->setTotalht($venda->getMontantvente());
            $facture->setTotalttc($venda->getMontantvente() * 1.2);
            $em->persist($facture);
            $em->flush();
        }

        if($vendaid == 0)
        {
            $vendaid = $venda->getId();
        }
        else
        {
            $facture = $em->getRepository('BaclooCrmBundle:Factures')
                ->findOneByCodelocata('V-'.$venda->getId());

            if(isset($facture))
            {
                $facture->setTotalht($venda->getMontantvente());
                $facture->setTotalttc($venda->getMontantvente() * 1.2);
                $em->persist($facture);
                $em->flush();
            }
        }
// echo 'BDC RECU'.$venda->getBdcrecu();
        if($venda->getBdcrecu() == 1)
        {
            $venda = $em->getRepository('BaclooCrmBundle:Venda')
                ->findOneById($venda->getId());
            $codecontrat = 'V-'.$venda->getId();
            $facturemois = $em->getRepository('BaclooCrmBundle:Factures')
                ->facturesmois($codecontrat);
//echo $codecontrat;
// print_r($facturemois);
            $totalht = 0;//echo $locid;
            $venteslignes = 0;
            $entretienlignes = 0;
            $transportlignes = 0;
            $annexeslignes = 0;
            $assurancelignes = 0;
            $descriptionvente = array();
            $descriptionentretien = array();
            $descriptiontransport = array();
            $descriptionannexe = array();

            if($venda->getBdcrecu() == 1)
            {
                foreach($venda->getVentes() as $loca)
                {
                    //Nous récupérons et formatons les différentes dates
                    // $finloc = strtotime ($loca->getFinloc());
                    // $finlocsec = strtotime ($loca->getFinloc());
                    // $dStart = $loca->getDebutloc();
                    // $dStartsec = strtotime ($loca->getDebutloc());
                    // $dEnd = $loca->getFinloc();

                    //Si date début antérieure au début du mois >> date début = début mois
                    // if($dStartsec <= $debutmoissec)
                    // {
                    // $dStart = $debutmois;
                    // }
                    //Si date fin posterieure à fin du mois >> date début = début mois
                    // if($finlocsec >= $finmoissec)
                    // {
                    // $dEnd = $finmois;
                    // }
                    //Création du montant HT de la ligne
                    if(null == $loca->getQuantite())
                    {
                        $quantite = 1;
                    }
                    else
                    {
                        $quantite = $loca->getQuantite();
                    }
                    $montantligne = $loca->getPu() * $quantite;
                    $totalht += $montantligne;

                    // $client = $em->getRepository('BaclooCrmBundle:Venda')
                    // ->findOneById($venda->getClientid());
                    //On affecte chaque ligne à sa famille
                    if($loca->getCodifvente() == 'vente')
                    {
                        $venteslignes += $montantligne;
                        $descriptionvente[] = $loca->getDescription();
                    }
                    elseif($loca->getCodifvente() == 'entretien')
                    {
                        $entretienlignes += $montantligne;
                        $descriptionentretien[] = $loca->getDescription();
                    }
                    elseif($loca->getCodifvente() == 'transport')
                    {
                        $transportlignes += $montantligne;
                        $descriptiontransport[] = $loca->getDescription();
                    }
                    elseif($loca->getCodifvente() == 'annexes')
                    {
                        $annexeslignes += $montantligne;
                        $descriptionannexe[] = $loca->getDescription();
                    }
                    elseif($loca->getCodifvente() == 'remise')
                    {
                    }
                    elseif($loca->getCodifvente() == 'assurance')
                    {
                        $assurancelignes += $montantligne;
                    }
                    //Fin affectation ligne à sa famille

                    $loca->setMontantvente($montantligne);
                    $em->persist($loca);
                    //$articles->getStockenr() = le stock avant l'enregistrement de la vente
                    $articles = $em->getRepository('BaclooCrmBundle:Articlesenvente')
                        ->findOneBy(array('reffrs' => $loca->getRefarticle(), 'designation' => $loca->getDescription()));

                }
                $compteclient = '411'.str_pad($venda->getClientid(), 3, "0", STR_PAD_LEFT);
                //echo 'CODECONTRAT'.$codecontrat;
                //Avant de saisir les écritures on vérifie qu'elle n'aient pas déjà été saisies
                $facture = $em->getRepository('BaclooCrmBundle:Factures')
                    ->findOneByCodelocata($codecontrat);

                if(!isset($facture))
                {
                    $new = 1;
                    $facture = new Factures;
                    $facture->setMontantdejareg(0);
                    $facture->setNumfacture('En attente');
                    $facture->setCompteurfac(99999);
                }
                $query = $em->createQuery(
                    'SELECT b.compteurfac
								FROM BaclooCrmBundle:Factures b
								ORDER BY b.id DESC'
                )->setMaxResults(1);
                $lastnumfact = $query->getOneOrNullResult();
                if(empty($lastnumfact) or !isset($lastnumfact) or $lastnumfact == null)
                {
                    $lastnumfact = 0;//echo 'vide';
                }
                else
                {
                    $lastnumfact = $query->getSingleScalarResult();//echo 'pas vide';
                }
//							$numfacture = date('Y').'V'.$lastnumfact++;
//Ajout à la table factures
                // $facta = $em->getRepository('BaclooCrmBundle:Facta')
                // ->findOneByControle('1234');


                $client = $em->getRepository('BaclooCrmBundle:Fiche')
                    ->findOneById($venda->getClientid());

                if($client->getDelaireglement() == 1)
                {
                    $next45 = $today;
                }
                elseif($client->getDelaireglement() == 2)
                {
                    $next45a = date('Y-m-d', strtotime('+45 days'));
                    $next45 = date('Y-m-t', strtotime($next45a));
                }
                elseif($client->getDelaireglement() == 3)
                {
                    $next45a = date('Y-m-d', strtotime('+45 days'));
                    $next45 = date('Y-m-t', strtotime($next45a));
                }
                else
                {
                    $next45 = $today;
                }
                if($venda->getRemise() > 0)
                {
                    $totalhtfac = $venda->getMontantvente() - ($venda->getMontantvente() * $venda->getRemise()/100);
                }
                else
                {
                    $totalhtfac = $venda->getMontantvente();
                }
                // echo 'Echeance'.$next45;
                $tva20 = $totalhtfac * 0.20;
                $totalttc = $totalhtfac + $tva20;
                $facture->setCodelocata('V-'.$venda->getId());
                $facture->setClientid($venda->getClientid());
                $facture->setClient($venda->getClient());
                $facture->setTotalht($totalhtfac);
                if($client->getTypeclient() == 'export')
                {
                    $facture->setTotalttc($totalhtfac);
                }
                else
                {
                    $facture->setTotalttc($totalhtfac * 1.2);
                }
                $facture->setEcheance($next45);
                $facture->setChantier($venda->getClient());
                $facture->setReglement(0);
                $facture->setDatepaiement('');
                // $facture->setModepaiement($client->getTypepaiement());
                $facture->setTypedoc('facture');
                $facture->setDatecrea($today);
                $facture->setUser($venda->getUser());
                $facture->setLocatacloneid($venda->getId());
                if($new == 1)
                {
                    $facture->addFiche($client);
                    $client->addFacture($facture);
                }
                $em->persist($venda);
                $em->persist($facture);
                $em->persist($client);
                $em->flush();
                //Fin ajout table factures
            }
            else{echo 'faut pas enregistrer les ventes';}
        }



        return $this->redirect($this->generateUrl('bacloocrm_ventes', array('ficheid' => $ficheid, 'vendaid' => $vendaid, 'typevente' => $typevente)));
    }
}