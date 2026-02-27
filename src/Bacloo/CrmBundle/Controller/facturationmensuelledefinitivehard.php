<?php
use Bacloo\CrmBundle\Entity\Afacturer;
use Bacloo\CrmBundle\Entity\Factures;
use Bacloo\CrmBundle\Entity\Locataclone;
use Bacloo\CrmBundle\Entity\Locationsclone;
use Bacloo\CrmBundle\Entity\Locationsslclone;
use Bacloo\CrmBundle\Entity\Locataventesclone;

$debutmoisinit = date('Y-m-01', strtotime(" -3 month"));//Debut mois précédent	
$debutmois = date('Y-m-01', strtotime(" -1 month"));//Debut mois précédent	
$moisprec = date('M', strtotime(" -1 month"));//Debut mois précédent	
// $finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent
$finmois = date('Y-m-d');//Fin mois précédent
			// $debutmois = new DateTime("first day of last month");//echo $debutmois->format('Y-m-d');			
			$finmoisinit = date('Y-m-d');
			$today = date('Y-m-d');
			$todaysec = strtotime($today);

			// $debutmois = date('Y-m-01');
			$debutmoissecinit = strtotime($debutmoisinit);
			$debutmoissec = strtotime($debutmoisinit);
			$finmoissecinit = strtotime ($finmoisinit);			
			$em = $this->getDoctrine()->getManager();
echo 'DDOOOCC';echo $doc;
if($doc == 'locations')
{echo 'LOCATIONS';
		$newLocata = $locata;
$compteclient = $clients->getNewid();
						$totalhtfac = $newLocata->getMontantloc() + $newLocata->getTransportaller() + $newLocata->getTransportretour() + $newLocata->getContributionverte() + $newLocata->getAssurance() + $newLocata->getMontantlocavente() + $newLocata->getMontantcarb();
						//echo 'TOTALHTFACT'.$totalhtfac;echo 'MONTANTLOC'.$newLocata->getMontantloc();echo 'TALLER'.$newLocata->getTransportaller();echo 'TRETOUR'.$newLocata->getTransportretour();echo 'ASSURANCE'.$rc;echo 'ECOPA'.$newLocata->getContributionverte();
						$tva20 = $totalhtfac * 0.20;


						echo 'NUMFACTURE'.$facture->getNumfacture();echo 'ENCOMPTA'.$facture->getEncompta();
						$totalttc = $totalhtfac + $tva20;
						$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
										->findOneBy(array('compte'=>$compteclient, 'debit'=>$totalttc, 'piece'=>$facture->getNumfacture()));
						if(isset($journalori))
						{echo 'journalori pas vide';
							$message = 1;
							$date = $journalori->getDate();
						}
						// elseif(!isset($journalori) && $facture->getEncompta() == 0)//A verifier !!
						elseif(!isset($journalori))//A verifier !!
						{echo 'journalori vide';
							$message = 0;
							$afacturer = new Afacturer;
							$afacturer->setDate($facture->getDatecrea());
							$afacturer->setJournal('VT');
							$afacturer->setCompte($compteclient);
							$afacturer->setDebit($totalttc);			
							$afacturer->setCredit(0);			
							$afacturer->setLibelle($locata->getClient());			
							$afacturer->setPiece($facture->getNumfacture());			
							$afacturer->setEcheance($facture->getEcheance());			
							$afacturer->setAnalytique('Client');
							$em->persist($afacturer);
							$em->flush();
										
							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($locata->getClientid());
							
							$ftotalht = new Afacturer;
							$ftotalht->setDate($facture->getDatecrea());
							$ftotalht->setJournal('VT');
							if($client->getTypeclient() == 'france')
							{
								$ftotalht->setCompte(706100);		
							}
							elseif($client->getTypeclient() == 'ue')
							{
								$ftotalht->setCompte(706110);		
							}
							elseif($client->getTypeclient() == 'export')
							{
								$ftotalht->setCompte(706115);		
							}else{$ftotalht->setCompte(9999999);}
							$ftotalht->setDebit(0);			
							$ftotalht->setCredit($newLocata->getMontantloc());		
							$ftotalht->setLibelle('Location de materiel d\'elevation');			
							$ftotalht->setPiece($facture->getNumfacture());				
							$ftotalht->setEcheance($facture->getEcheance());				
							$ftotalht->setAnalytique('Loc');
							$em->persist($ftotalht);
							$em->flush();
							$montantlocaventestot = $newLocata->getMontantlocavente() + $newLocata->getMontantcarb();
							if($montantlocaventestot > 0)
							{
								//Carburant
								$ventes = new Afacturer;
								$ventes->setDate($facture->getDatecrea());
								$ventes->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$ventes->setCompte(707100);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$ventes->setCompte(707110);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$ventes->setCompte(707115);		
								}else{$ventes->setCompte(9999999);}
								$ventes->setDebit(0);			
								$ventes->setCredit($montantlocaventestot);			
								$ventes->setLibelle('Vente');			
								$ventes->setPiece($facture->getNumfacture());				
								$ventes->setEcheance($facture->getEcheance());				
								$ventes->setAnalytique('Vente');
								$em->persist($ventes);
								$em->flush();
							}
							
							// if($montantcarb > 0)
							// {

								// $carburant = new Afacturer;
								// $carburant->setDate($today);
								// $carburant->setJournal('VT');
								// if($client->getTypeclient() == 'france')
								// {

									// $carburant->setCompte(707100);		
								// }

								// elseif($client->getTypeclient() == 'ue')
								// {

									// $carburant->setCompte(707110);		
								// }

								// elseif($client->getTypeclient() == 'export')
								// {

									// $carburant->setCompte(707115);		
								// }else{$carburant->setCompte(9999999);}
								// $carburant->setDebit(0);			
								// $carburant->setCredit($montantcarb);			
								// $carburant->setLibelle('Vente de carburant');			
								// $carburant->setPiece($locata->getId());				
								// $carburant->setEcheance(date('Y-m-d', strtotime("+45 days")));			
								// $carburant->setAnalytique('Vente');
								// $em->persist($carburant);
								// $em->flush();
							// }

					
							if($client->getTypeclient() == 'france')
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('VT');
								$ftva->setCompte(445710);
								$ftva->setDebit(0);			
								$ftva->setCredit($tva20);			
								$ftva->setLibelle('TVA collectee');			
								$ftva->setPiece($facture->getNumfacture());				
								$ftva->setEcheance($facture->getEcheance());			
								$ftva->setAnalytique('Tva');
								$em->persist($ftva);
								$em->flush();					
							}
							
							if($newLocata->getAssurance() > 0)
							{
								$fassurance= new Afacturer;
								$fassurance->setDate($facture->getDatecrea());
								$fassurance->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$fassurance->setCompte(706200);			
									$fassurance->setLibelle('Assurance France');
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$fassurance->setCompte(706201);			
									$fassurance->setLibelle('Assurance UE');		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$fassurance->setCompte(706202);			
									$fassurance->setLibelle('Assurance Export');		
								}
								else
								{
									$fassurance->setCompte(706200);			
									$fassurance->setLibelle('Assurance France');									
								}
								$fassurance->setDebit(0);			
								$fassurance->setCredit($newLocata->getAssurance());			
								$fassurance->setPiece($facture->getNumfacture());				
								$fassurance->setEcheance($facture->getEcheance());			
								$fassurance->setAnalytique('Assurance');
								$em->persist($fassurance);
								$em->flush();					
							}
							
							if($newLocata->getContributionverte() > 0)
							{
								$fecopart = new Afacturer;
								$fecopart->setDate($facture->getDatecrea());
								$fecopart->setJournal('VT');
								$fecopart->setCompte(611);
								$fecopart->setDebit(0);			
								$fecopart->setCredit($newLocata->getContributionverte());			
								$fecopart->setLibelle('Frais environnementaux');			
								$fecopart->setPiece($facture->getNumfacture());					
								$fecopart->setEcheance(date('Y-m-d', strtotime("+45 days")));			
								$fecopart->setAnalytique('Client');
								$em->persist($fecopart);
								$em->flush();					
							}
							
						//ATTENTION !!! FACTURATION TRANSPORT RETOUR QUE SI CONTRAT TERMINE
							if(($newLocata->getTransportaller() > 0 || $newLocata->getTransportretour() > 0) && empty($locatador))
							{
								$taller = new Afacturer;
								$taller->setDate($facture->getDatecrea());
								$taller->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$taller->setCompte(706210);			
									$taller->setLibelle('Transport France');	
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$taller->setCompte(706211);			
									$taller->setLibelle('Transport UE');			
								}
								elseif($client->getTypeclient() == 'export')
								{
									$taller->setCompte(706212);			
									$taller->setLibelle('Transport Export');			
								}
								else
								{
									$taller->setCompte(706210);;			
									$taller->setLibelle('Transport');
								}
								$taller->setDebit(0);
							//on regroupe les trsport dans un seul transport	

							if($newLocata->getTransportretour() > 0)
							{								
								$taller->setCredit($newLocata->getTransportaller() + $newLocata->getTransportretour());
								
							}
							else
							{
								$taller->setCredit($newLocata->getTransportaller());
							}
								$taller->setPiece($facture->getNumfacture());				
								$taller->setEcheance($facture->getEcheance());				
								$taller->setAnalytique('Transport');
								$em->persist($taller);
								$em->flush();					
							}
							
							// if($locata->getTransportretour() > 0)
							// {
								// $tretour = new Afacturer;
								// $tretour->setDate($today);
								// $tretour->setJournal('VT');
								// if($client->getTypeclient() == 'france')
								// {
									// $tretour->setCompte(706210);			
									// $tretour->setLibelle('Transport France');	
								// }
								// elseif($client->getTypeclient() == 'ue')
								// {
									// $tretour->setCompte(706211);			
									// $tretour->setLibelle('Transport UE');			
								// }
								// elseif($client->getTypeclient() == 'export')
								// {
									// $tretour->setCompte(706212);			
									// $tretour->setLibelle('Transport Export');			
								// }else{$ftotalht->setCompte(9999999);}
								// $tretour->setDebit(0);			
								// $tretour->setCredit($locata->getTransportretour());			
								// $tretour->setPiece($locata->getId());				
								// $tretour->setEcheance(date('Y-m-d', strtotime("+45 days")));			
								// $tretour->setAnalytique('Transport retour');
								// $em->persist($tretour);
								// $em->flush();					
							// }
								
								//Ajout à la table factures
			
									
									$client = $clients;
									if($client->getDelaireglement() == 1)
									{
										$next45 = $today;
									}
									elseif($client->getDelaireglement() == 2)
									{
										$next45 = date('Y-m-d', strtotime($today . '+45 days'));
									}
									elseif($client->getDelaireglement() == 3)
									{
										$next45 = date('Y-m-d', strtotime($today . '+30 days'));
									}
									else
									{
										$next45 = $today;
									}						
	
									//Fin ajout table factures
						}
}
elseif($doc == 'achat')
{
	//echo 'ACHATDEF';exit();
				//Partie achat
				$debutmois = date('Y-m-01', strtotime(" -1 month"));//Debut mois précédent	
				$finmois = date('Y-m-d');//Fin mois précédent			
// print_r($achatstot);

					//On reconstitue  le code bdc			
					$codecontrat = 'H-'.$locatafrs->getId();
					
					//Sur ce BDC à facturer y a-t-il des locations
					$nbloc = 0;//Nombre de loc
					$nbautresachats = 0;//Nombre d'autres achats
					if($typeachat == 'normal')
					{
						$locatafrsget = $locatafrs->getLocationsfrs();
					}
					else
					{
						$locatafrsget = $locatafrs->getLocationsfrsclone();
					}				
					//On boucle pour récupérer chaque ligne du BDC
					foreach($locatafrsget as $loca)
					{
						//S'il s'agit d'un location on monte le compteur de 1 
						if($loca->getReference() == 'location')
						{
							$nbloc++;
						}
						else //SI c'est un achat autre on montre le compteur de 1
						{
							$nbautresachats++; 
						}
					}
					//On récupère les factures ayant ce code bdc
					$facturemois = $em->getRepository('BaclooCrmBundle:Factures')
								->facturesmois($codecontrat);
					
					//Initialisation des compteurs et tableaux
					$totalht = 0;//echo $locid;			
					$locationlignes = 0;			
					$assurancelignes = 0;		
					$contrubutionvertelignes = 0;		
					$piecelignes = 0;			
					$transportlignes = 0;			
					$materiellignes = 0;			
					$prestationlignes = 0;			
					$autrelignes = 0;			
					$descriptionvente = array();			
					$descriptionpiece = array();			
					$descriptiontransport = array();			
					$descriptionannexe = array();
					$descriptionautre = array();
// echo 'nbloc'.$nbloc;echo 'etatbdc'.$locatafrs->getEtatbdc();				
					//Point 1 : pas de loc
					//S'il 'n ya pas de factures avec ce n°de bdc et que le bdc à facturer a été validé
					//et qu'il n'y a pas de location dessus et au moins 1 autre achat, on gènère la facturation
					if($typeachat == 'normal')
					{echo 'point1';
						include('achatnormaldef.php');					
					}//S'il y a un mélange de Locations et d'achats					
					else
					{echo 'point2';
						include('achatsouslocdef.php');	
					}
						$comptefrs = '401'.$locatafrs->getFournisseurid();
						
						$totalhtfac = $montantloc + $transportbdc + $contributionverte + $assurance;
						$tva20 = $totalhtfac * 0.20;
						$totalttc = $totalhtfac + $tva20;//echo 'totalhtfac'.$totalhtfac;	
						
							$message = 0;
							$afacturer2 = new Afacturer;
							$afacturer2->setDate($facture->getDatecrea());
							$afacturer2->setJournal('ACH');
							$afacturer2->setCompte($comptefrs);
							$afacturer2->setDebit(0);			
							$afacturer2->setCredit($totalttc);			
							$afacturer2->setLibelle($locatafrs->getFournisseur());			
							$afacturer2->setPiece($facture->getNumfacture());			
							$afacturer2->setEcheance($facture->getEcheance());				
							$afacturer2->setAnalytique('Fournisseur '.$locatafrs->getFournisseur());
							$em->persist($afacturer2);
							$em->flush();
										
							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($locatafrs->getFournisseurid());
echo 'FAAAACT';						
							$v = 0;
							$e = 0;
							$t = 0;
							$ass = 0;
							$ann = 0;

    foreach($locatafrsget as $locationsfrs)
    {
        if($locationsfrs->getReference() == 'location' && $v == 0)
        {
            $location = new Afacturer;
            $location->setDate($facture->getDatecrea());
            $location->setJournal('ACH');
            $location->setCompte(6135);
//                                    $locationlignes += $locationsfrs->getMontantht();
            $location->setDebit($locationlignes);
            $location->setCredit(0);
            $location->setLibelle($locatafrs->getFournisseur());
            $location->setPiece($facture->getNumfacture());
            $location->setEcheance('');
            $location->setAnalytique('');
            $em->persist($location);
            $em->flush();
            $v++;
        }
        elseif($locationsfrs->getReference() == 'piece' && $e == 0)
        {
            $piece = new Afacturer;
            $piece->setDate($facture->getDatecrea());
            $piece->setJournal('ACH');
            $piece->setCompte(615);
//                                    $piecelignes += $locationsfrs->getMontantht();
            $piece->setDebit($piecelignes);
            $piece->setCredit(0);
            $piece->setLibelle($locatafrs->getFournisseur());
            $piece->setPiece($facture->getNumfacture());
            $piece->setEcheance('');
            $piece->setAnalytique('');
            $em->persist($piece);
            $em->flush();
            $e++;
        }
        // elseif(($locationsfrs->getReference() == 'transport' or $locationsfrs->getReference() == 'transportaller' or $locationsfrs->getReference() == 'transportretour') && $t == 0)
        elseif($locationsfrs->getReference() == 'transport' or $locationsfrs->getReference() == 'transportaller' or $locationsfrs->getReference() == 'transportretour')
        {
            $transport = new Afacturer;
            $transport->setDate($facture->getDatecrea());
            $transport->setJournal('ACH');
            $transport->setCompte(6241);
//									$transportlignes += $locationsfrs->getMontantht();
            $transport->setDebit($transportlignes);
            $transport->setCredit(0);
            $transport->setLibelle($locatafrs->getFournisseur());
            $transport->setPiece($facture->getNumfacture());
            $transport->setEcheance('');
            $transport->setAnalytique('');
            $em->persist($transport);
            $em->flush();
            $t++;
        }
        elseif($locationsfrs->getReference() == 'prestation' && $ass == 0)
        {
            $prestation = new Afacturer;
            $prestation->setDate($facture->getDatecrea());
            $prestation->setJournal('ACH');
            $prestation->setCompte(604);
//                                    $prestationlignes += $locationsfrs->getMontantht();
            $prestation->setDebit($prestationlignes);
            $prestation->setCredit(0);
            $prestation->setLibelle($locatafrs->getFournisseur());
            $prestation->setPiece($facture->getNumfacture());
            $prestation->setEcheance('');
            $prestation->setAnalytique('');
            $em->persist($prestation);
            $em->flush();
            $ass++;
        }
        elseif($locationsfrs->getReference() == 'autre' && $ann == 0)
        {
            $materiel = new Afacturer;
            $materiel->setDate($facture->getDatecrea());
            $materiel->setJournal('ACH');
            $materiel->setCompte(607);
//                                    $autrelignes += $locationsfrs->getMontantht();
            $materiel->setDebit($autrelignes);
            $materiel->setCredit(0);
            $materiel->setLibelle($locatafrs->getFournisseur());
            $materiel->setPiece($facture->getNumfacture());
            $materiel->setEcheance('');
            $materiel->setAnalytique('');
            $em->persist($materiel);
            $em->flush();
            $ann++;
        }
        $locationsfrs->setDef(1);
        $em->flush();
    }
							
							if($client->getTypeclient() == 'france')
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('ACH');
								$ftva->setCompte(44566);
								$ftva->setDebit($tva20);			
								$ftva->setCredit(0);			
								$ftva->setLibelle('TVA deductible');			
								$ftva->setPiece($facture->getNumfacture());				
								$ftva->setEcheance($facture->getEcheance());	
								$em->persist($ftva);
								$em->flush();						
							}
							
							if($typeachat == 'normal')
							{
								$factures = $em->getRepository('BaclooCrmBundle:Factures')
												->findOneBy(array('locatacloneid' => $locatafrs->getId(), 'codelocata' => 'H-'.$locatafrs->getId()));
							}
							else
							{
								$factures = $em->getRepository('BaclooCrmBundle:Factures')
												->findOneByLocatacloneid($locatafrs->getId());	
							}
echo 'NUM DU LOCATAFRS';echo $locatafrs->getId();						
						// $fact->setEncompta(1);						
						$em->flush();			
echo 'FLUSH';						
				
				//Fin partie achat
}				
elseif($doc == 'ventes')
{				
				//Partie ventes				
					$codecontrat = 'V-'.$venda->getId();
					$facturemois = $em->getRepository('BaclooCrmBundle:Factures')
								->facturesmois($codecontrat);
//echo 'Dasn les ventes';;
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

							$client = $em->getRepository('BaclooCrmBundle:Venda')
										->findOneById($venda->getClientid());					
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

						}
						$client = $em->getRepository('BaclooCrmBundle:Fiche')
									->findOneById($venda->getClientid());						
						$compteclient = $client->getNewid();			  
						
						$tva20 = $venda->getMontantvente() * 0.20;
						$totalhtfac = $venda->getMontantvente();
						$totalttc = $totalhtfac + $tva20;

						//Avant de saisir les écritures on vérifie qu'elle n'aient pas déjà été saisies
						$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
										->findOneBy(array('compte'=>$compteclient, 'debit'=>$totalttc, 'piece'=>'V-'.$venda->getId()));
						if(isset($journalori))
						{//echo 'orivente pas vide';
							$message = 1;
							$date = $journalori->getDate();
						}
						else
						{//echo 'orivente vide';
							$message = 0;
							$afacturer2 = new Afacturer;
							$afacturer2->setDate($facture->getDatecrea());
							$afacturer2->setJournal('VT');
							$afacturer2->setCompte($compteclient);
							$afacturer2->setDebit($totalttc);			
							$afacturer2->setCredit(0);			
							$afacturer2->setLibelle($venda->getClient());			
							$afacturer2->setPiece($facture->getNumfacture());			
							$afacturer2->setEcheance($facture->getEcheance());			
							$afacturer2->setAnalytique('Client');
							$em->persist($afacturer2);
							$em->flush();
										
							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($venda->getClientid());
						
						$v = 0;
						$e = 0;
						$t = 0;
						$ass = 0;
						$ann = 0;
						
						foreach($venda->getVentes() as $vente)
						{echo 'boucle vente';
							if($vente->getCodifvente() == 'vente' && $v == 0)
							{
								$ventes = new Afacturer;
								$ventes->setDate($facture->getDatecrea());
								$ventes->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$ventes->setCompte(707100);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$ventes->setCompte(707110);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$ventes->setCompte(707115);		
								}else{$ventes->setCompte(9999999);}
								$ventes->setDebit(0);			
								$ventes->setCredit($venteslignes);			
								$ventes->setLibelle($venda->getClient());			
								$ventes->setPiece($facture->getNumfacture());				
								$ventes->setEcheance($facture->getEcheance());			
								$ventes->setAnalytique('Vente');
								$em->persist($ventes);
								$em->flush();
								$v++;
							}
							elseif($vente->getCodifvente() == 'entretien' && $e == 0)
							{echo 'entretien';
								$entretien = new Afacturer;
								$entretien->setDate($facture->getDatecrea());
								$entretien->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$entretien->setCompte(706220);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$entretien->setCompte(706221);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$entretien->setCompte(706222);		
								}else{$entretien->setCompte(9999999);}
								$entretien->setDebit(0);			
								$entretien->setCredit($entretienlignes);			
								$entretien->setLibelle($venda->getClient());			
								$entretien->setPiece($facture->getNumfacture());				
								$entretien->setEcheance($facture->getEcheance());			
								$entretien->setAnalytique('Entretien');
								$em->persist($entretien);
								$em->flush();	
								$e++;
							}
							elseif($vente->getCodifvente() == 'transport' && $t == 0)
							{
								$transport = new Afacturer;
								$transport->setDate($facture->getDatecrea());
								$transport->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$transport->setCompte(706210);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$transport->setCompte(706211);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$transport->setCompte(706212);		
								}else{$transport->setCompte(9999999);}
								$transport->setDebit(0);			
								$transport->setCredit($transportlignes);			
								$transport->setLibelle($venda->getClient());			
								$transport->setPiece($facture->getNumfacture());				
								$transport->setEcheance($facture->getEcheance());			
								$transport->setAnalytique('transport');
								$em->persist($transport);
								$em->flush();
								$t++;
							}
							elseif($vente->getCodifvente() == 'assurance' && $ass == 0)
							{
								$assurance = new Afacturer;
								$assurance->setDate($facture->getDatecrea());
								$assurance->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$assurance->setCompte(706200);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$assurance->setCompte(706201);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$assurance->setCompte(706202);		
								}else{$assurance->setCompte(9999999);}
								$assurance->setDebit(0);			
								$assurance->setCredit($vente->getMontantvente());			
								$assurance->setLibelle($venda->getClient());			
								$assurance->setPiece($facture->getNumfacture());				
								$assurance->setEcheance($facture->getEcheance());			
								$assurance->setAnalytique('assurance');
								$em->persist($assurance);
								$em->flush();
								$ass++;								
							}
							elseif($vente->getCodifvente() == 'annexes' && $ann == 0)
							{
								$annexes = new Afacturer;
								$annexes->setDate($facture->getDatecrea());
								$annexes->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$annexes->setCompte(708000);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$annexes->setCompte(708000);		
								}
								elseif($client->getTypeclient() == 'export')
								{
									$annexes->setCompte(708000);		
								}else{$annexes->setCompte(9999999);}
								$annexes->setDebit(0);			
								$annexes->setCredit($annexeslignes);			
								$annexes->setLibelle($venda->getClient());			
								$annexes->setPiece($facture->getNumfacture());				
								$annexes->setEcheance($facture->getEcheance());			
								$annexes->setAnalytique('annexes');
								$em->persist($annexes);
								$em->flush();
								$ann++;
							}
						}
							
							if($client->getTypeclient() == 'france')
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('VT');
								$ftva->setCompte(445710);
								$ftva->setDebit(0);			
								$ftva->setCredit($tva20);			
								$ftva->setLibelle('TVA collectee');			
								$ftva->setPiece($facture->getNumfacture());					
								$ftva->setEcheance(date('Y-m-d', strtotime("+45 days")));			
								$ftva->setAnalytique('Tva');
								$em->persist($ftva);
								$em->flush();						
							}				
						}
						
	// $fact->setEncompta(1);						
	// $em->flush();				
				//Fin partie ventes				
}
elseif($doc == 'avoir')
{
	// echo $facture->getId();
	$locata = $em->getRepository('BaclooCrmBundle:Locataclone')		
				   ->findOneById($facture->getLocatacloneid()); 

	$client = $em->getRepository('BaclooCrmBundle:Fiche')		
	 ->findOneById($locata->getClientid());	

	$totalttc = $facture->getTotalttc();
	$totalht = $facture->getTotalht();
	$tva = $totalttc - $totalht;
	$commentaire = $facture->getCommentaire();
	//PASSAGE DES ECRITURES DES AVOIRS

	//avant de passer les écritures on vérifie qu'elles n'existent pas deja dans le journalori
	$compteclient = $client->getClientid();
	$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
					->findOneBy(array('compte'=>$compteclient, 'credit'=>$facture->getTotalttc(), 'piece'=>$locata->getId()));	
					
	//Si opréation déjà passée alerter l'utilisateur et bloquer sinon passer
	if(!empty($journalori))
	{echo 'PAS vide le journal ';
		$message = 1; //Vous avez déjà passé cette écriture le ...
		return $this->redirect($this->generateUrl('bacloocrm_avoirloc', array('locid' => $locata->getId(), 'message' => $message)));
	}
	else
	{echo 'VIIIIIDE';
		//On passe les écritures
		
		//On débite le compte 700 utilisé				
		$ftotalht = new Afacturer;
		$ftotalht->setDate($facture->getDatecrea());
		$ftotalht->setJournal('VT');
		if($client->getTypeclient() == 'france')
		{
			$ftotalht->setCompte(706100);		
		}
		elseif($client->getTypeclient() == 'ue')
		{
			$ftotalht->setCompte(706110);		
		}
		elseif($client->getTypeclient() == 'export')
		{
			$ftotalht->setCompte(706115);		
		}else{$ftotalht->setCompte(9999999);}
		$ftotalht->setDebit($totalht);			
		$ftotalht->setCredit(0);			
		$ftotalht->setLibelle('Avoir sur location de matériel d\'élévation');			
		$ftotalht->setPiece($facture->getNumfacture());				
		$ftotalht->setEcheance($facture->getEcheance());			
		$ftotalht->setAnalytique('Loc');
		$em->persist($ftotalht);
		
		//On débite le compte assurance si assurance facturé
		if($locata->getAssurance() == 1)
		{
			$fassurance= new Afacturer;
			$fassurance->setDate($facture->getDatecrea());
			$fassurance->setJournal('VT');
			if($client->getTypeclient() == 'france')
			{
				$fassurance->setCompte(706200);			
				$fassurance->setLibelle('Assurance France');
			}
			elseif($client->getTypeclient() == 'ue')
			{
				$fassurance->setCompte(706201);			
				$fassurance->setLibelle('Assurance UE');		
			}
			elseif($client->getTypeclient() == 'export')
			{
				$fassurance->setCompte(706202);			
				$fassurance->setLibelle('Assurance Export');		
			}
			$fassurance->setDebit($assurance);			
			$fassurance->setCredit(0);			
			$fassurance->setPiece($facture->getNumfacture());				
			$fassurance->setEcheance($facture->getEcheance());			
			$fassurance->setAnalytique('Assurance');
			$em->persist($fassurance);					
		}
		
		//On débite le compte TVA si client france
		if($client->getTypeclient() == 'france')
		{
			$ftva = new Afacturer;
			$ftva->setDate($facture->getDatecrea());
			$ftva->setJournal('VT');
			$ftva->setCompte(445710);
			$ftva->setDebit($tva);			
			$ftva->setCredit(0);			
			$ftva->setLibelle('TVA collectée');			
			$ftva->setPiece($facture->getNumfacture());				
			$ftva->setEcheance($facture->getEcheance());			
			$ftva->setAnalytique('Tva');
			$em->persist($ftva);						
		}				
		
		//On crédite 411
		$afacturer = new Afacturer;
		$afacturer->setDate($facture->getDatecrea());
		$afacturer->setJournal('VT');
		$afacturer->setCompte($compteclient);
		$afacturer->setDebit(0);			
		$afacturer->setCredit($totalttc);			
		$afacturer->setLibelle($locata->getClient());			
		$afacturer->setPiece($facture->getNumfacture());			
		$afacturer->setEcheance($facture->getEcheance());			
		$afacturer->setAnalytique('Client');
		$em->persist($afacturer);
		// $facture->setEncompta(1);						
		$em->flush();	
		//Fin ajout table factures				
	}				   
}	
$facture->setEncompta(1);						
$em->flush();		 
		//FIN FACTURATION MENSUELLE