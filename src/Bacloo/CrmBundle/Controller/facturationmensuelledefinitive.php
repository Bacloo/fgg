<?php
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use Bacloo\CrmBundle\Entity\Afacturer;
use Bacloo\CrmBundle\Entity\Factures;
use Bacloo\CrmBundle\Entity\Locataclone;
use Bacloo\CrmBundle\Entity\Locationsclone;
use Bacloo\CrmBundle\Entity\Locationsslclone;
use Bacloo\CrmBundle\Entity\Locataventesclone;

$debutmoisinit = date('Y-m-01', strtotime(" -1 month"));//Debut mois précédent	
$debutmois = date('Y-m-01', strtotime(" -1 month"));//Debut mois précédent	
$moisprec = date('M', strtotime(" -1 month"));//Debut mois précédent	
$finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent

if($facture->getTotalht() == $facture->getTotalttc())
{
    $sanstva = 1;
}
else
{
    $sanstva = 0;
}

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
						$totalht = 0;
						$transport = 0;	
						$totaltrspaller = 0;
						$totaltrspretour = 0;
						$jour50 = 0;
						$jour100 = 0;
						$montantcarb = 0;
						$premiermois = 0;
						$contributionverte = 0;
						$assurance = 0;	
						$compte7061 = 0;//Location sous loc
                        $compte7064 = 0;//Location parc
                        $parc = 0;
                        $sl = 0;
						//On clone si fin de mois et si location terminée même si une loc n'est pas terminée sur le contrat
						foreach($locata->getLocationsclone() as $loca)
						{
                            $compte7064 += $loca->getMontantloc();
							//On récupère le dernier locationsslclone
							//echo $locata->getId(); echo $loca->getCodemachineinterne();
							// $lastloc = $em->getRepository('BaclooCrmBundle:Locationsclone')
									// ->lastloc($loca->getCodemachineinterne());
									// print_r($lastlocsl);

							if(strtotime($loca->getDebutloc()) >= strtotime($debutmois) && strtotime($loca->getDebutloc()) <= strtotime($finmois))
							{
								$premiermois++;
							}
									
							$em = $this->getDoctrine()
								   ->getManager();		
				
							$query = $em->createQuery(
								'SELECT l
								FROM BaclooCrmBundle:Locationsclone l
								WHERE l.codemachineinterne = :codemachineinterne
								ORDER BY l.id DESC'
							)->setMaxResults(1);
							$query->setParameter('codemachineinterne', $loca->getCodemachineinterne());
							
							$lastloc = $query->getSingleResult();	
							
// echo 'YYYY';echo $lastlocsl->getCodemachineinterne();

							if(isset($lastloc))
							{				
								$finloc = $lastloc->getFinloc();
								$transportallerp = $lastloc->getTransportaller();
								$moisderfac = date("M", strtotime($finloc));
								$moisderfacnum = date("m", strtotime($finloc));
							}
							else
							{
								$moisderfac = 0;
								$moisderfacnum = 0;
							}	
echo 'transportallerp';$transportallerp;							

								if($loca->getEtatloc() == 'En location' && strtotime($loca->getFinloc()) < date('Y-m-01'))
								{
									$finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent
									$finmoissec = strtotime ($finmois);	
								}
								elseif($loca->getEtatloc() == 'Location terminée')
								{
									$finmois = $loca->getFinloc();//Fin mois précédent
									$finmoissec = strtotime ($finmois);
									$loca->setCloture(1);
									$em->flush();
								}
								else
								{
									$finmois = $loca->getFinloc();//Fin mois précédent
									$finmoissec = strtotime ($finmois);
									$loca->setCloture(1);
									$em->flush();
								}
									
								if($loca->getEtatloc() == 'En location' && strtotime($loca->getFinloc()) >= date('Y-m-01'))
								{
									$finloc = date('Y-m-t', strtotime(" -1 month"));
								}
								else
								{
									$finloc = $loca->getFinloc();
								}
								
								$em = $this->getDoctrine()->getManager();
								$query = $em->createQuery(
									'SELECT m.id
									FROM BaclooCrmBundle:Locationsclone m
									WHERE m.codemachineinterne = :codemachineinterne
									ORDER BY m.id DESC');
								$query->setMaxResults(1);
								$query->setParameter('codemachineinterne', $loca->getCodemachineinterne());
								$oldid = $query->getSingleResult();
// echo '555';								
								$locationsclonedeja = $em->getRepository('BaclooCrmBundle:Locationsclone')
									->findOneBy(array('oldid' => $loca->getId(), 'etatloc' => 'Location terminée', 'codemachineinterne' => $loca->getCodemachineinterne()));								
								

									$finlocsec = strtotime ($loca->getFinloc());	
									$dStart = $loca->getDebutloc();
									$dStartsec = strtotime ($loca->getDebutloc());
									$dEnd = $loca->getFinloc();
// echo 'xxxxxxxxxxxxxxxxx';echo $finmois; echo $loca->getFinloc();
// echo $dStart; echo $debutmois;
									//Si date début antérieure au début du mois >> date début = début mois
									if($dStartsec <= $debutmoissec)
									{echo 'DIDAN';
										$dStart = $debutmois;
									}
									elseif($dStartsec < strtotime(date('Y-m-01')) && $dStartsec > $debutmoissec && $moisderfacnum == date('m', strtotime(" -1 month")))//si date début est mois dernier et dernière facturation = mois dernier.
									{echo 'DIDAN2';
										$dStart = date('Y-m-01');
									}
									else
									{
										$dStart = $loca->getDebutloc();
									}
									//si la location terminée et la date de fin est comprise entre le début du mois courant et la date du jour
									if($loca->getEtatloc() == 'Location terminée' and $finlocsec <= $todaysec and $finlocsec >= strtotime(date('Y-m-01')))
									{echo 'CAY';
										$dEnd = $loca->getFinloc();
										if(strtotime($loca->getDebutloc()) < strtotime(date('Y-m-01')))
										{echo 'GUY';
											$dStart = date('Y-m-01');
										}
										else
										{echo 'STLO';
											$dStart = $loca->getDebutloc();
										}
									}
									//si la date de début est inférieur au début de mois prec
									//Si date fin posterieure à fin du mois prec >> date fin = fin mois prec
									if($finlocsec >= $finmoissec)
									{
										if($loca->getEtatloc() == 'Location terminée')
										{echo 'ici';
											$dEnd = $loca->getFinloc();
											$finmois = $loca->getFinloc();
											$finmoissec = strtotime ($finmois);
										}
										else
										{echo 'LAAAA';
											if($loca->getEtatloc() == 'En location' && strtotime($loca->getFinloc()) < date('Y-m-01'))
											{
												$finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent
												$finmoissec = strtotime ($finmois);
											}
											else
                                            {
                                                $finmois = date('Y-m-t');//Fin mois précédent
                                                $finmoissec = strtotime ($finmois);
                                            }
											$dEnd = $finmois;
										}
									}

									//Si date début après début de mois alors $dstart = $dstart on ne fait rien. !! pas sûr !!!

									//on calcule le nombre de jours de location
									// echo $loca->getEntreprise();//echo $dStart;echo $dEnd;									
									// $begin = new DateTime($dStart);
									$begin = new DateTime($dStart);
									$end = new DateTime($dEnd);
									$end = $end->modify( '+1 day' ); 
// echo '*****';
// echo $begin->format('Y-m-d');
// echo $end->format('Y-m-d');
									$interval = DateInterval::createFromDateString('1 day');
									$period = new DatePeriod($begin, $interval, $end);
									$nbjloc = $loca->getNbjloc();
									$nbjlocass = $loca->getNbjlocass();

//									foreach ($period as $dt) {
//										$newformat = $dt->format("D");
//										$nbjlocass++;
//										if($locata->getFacturersamedi() == 1 && $newformat == 'Sat')
//										{
//											$nbjloc++;
//
//										}
//										elseif($locata->getFacturerdimanche() == 1 && $newformat == 'Sun')
//										{
//											$nbjloc++;
//										}
//										elseif($newformat == 'Sat' or $newformat == 'Sun')
//										{}
//										else
//										{
//											$nbjloc++;
//										}
//									}

// echo 'laa';		echo 'nbjloc'.$nbjloc;					
									//clonage et copie locations	
									// $locatio  = $em->getRepository('BaclooCrmBundle:Locations')		
									   // ->findOneByCodemachineinterne($ecode);
									// $assurancela =($nbjlocass/$loca->getNbjloc())*$loca->getAssurance(); 



											//Création du montant HT ligne par ligne
											
											if(null !== $loca->getLoyerp1())
											{//echo '1111';
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp1() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp1() * $loca->getjour100());
												}
												$totalht += $nbjloc * $loca->getLoyerp1() - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyerp2())
											{//echo '2222';
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp2() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp2() * $loca->getjour100());
												}
												$totalht += $nbjloc * $loca->getLoyerp2() - $jour50 - $jour100;
							// echo '>>>'.$nbjloc.'**'.$loca->getLoyerp2().'=='.$nbjloc*$loca->getLoyerp2();
											}
											elseif(null !== $loca->getLoyerp3())
											{echo '3333';
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp3() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp3() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp3()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyerp4())
											{echo '4444';echo 'nbjloc'.$loca->getNbjloc();echo 'loyer'.$loca->getLoyerp4();
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp4() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp4() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp4()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyermensuel())
											{
												if($nbjloc < 20)
												{
													$loyer = $loca->getLoyermensuel()/$nbjloc;
												}
												else
												{
													$nbjloc = 20;													
													$loyer = ($loca->getLoyermensuel()/20);
												}													
												if($loca->getJour50()>0)
												{
													$jour50 += ($loyer * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loyer * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loyer) - $jour50 - $jour100;
											}
		// echo '++++'.$totalht.'+++';	echo $loca->getEntreprise();									
											if(null !== $loca->getMontantcarb())
											{
												$montantcarb += $loca->getMontantcarb();
											}						
											if(null !== $loca->getTransportaller() && $loca->getTransportaller()>0 && $loca->getDebutloc() >= $debutmois && $loca->getDebutloc() <= $finmois)
											{
												$transport += $loca->getTransportaller();
											}
											
											if(null !== $loca->getTransportretour() && $loca->getTransportretour()>0 && $loca->getFinloc() >= $debutmois && $loca->getFinloc() <= $finmois)
											{
												$transport += $loca->getTransportretour();
											}




						// $facture->setEncompta(1);
						$loca->setDef(1);					
						$em->flush();
						}
						if($compte7064 > 0){$parc = 1;}
						//Partie sous location
						foreach($locata->getLocationsslclone() as $loca)
						{echo 'INTERNE'.$loca->getCodemachineinterne();
                            $compte7061 += $loca->getMontantloc();
							//On récupère le dernier locationsslclone
							//echo $locata->getId(); echo $loca->getCodemachineinterne();
							// $lastloc = $em->getRepository('BaclooCrmBundle:Locataclone')
									// ->lastloc($locata->getId(), $loca->getCodemachineinterne());
									
							if(strtotime($loca->getDebutloc()) >= strtotime($debutmois) && strtotime($loca->getDebutloc()) <= strtotime($finmois))
							{
								$premiermois++;
							}									
									
							$em = $this->getDoctrine()
								   ->getManager();		
				
							$query = $em->createQuery(
								'SELECT l
								FROM BaclooCrmBundle:Locationsslclone l
								WHERE l.codemachineinterne = :codemachineinterne
								ORDER BY l.id DESC'
							)->setMaxResults(1);
							$query->setParameter('codemachineinterne', $loca->getCodemachineinterne());
							
							$lastlocsl = $query->getOneOrNullResult();	
							
// echo 'YYYY';echo $lastlocsl->getCodemachineinterne();

							if(isset($lastlocsl))
							{				
								$finloc = $lastlocsl->getFinloc();
								$transportallerp = $lastlocsl->getTransportaller();
								$moisderfac = date("M", strtotime($finloc));
								$moisderfacnum = date("m", strtotime($finloc));
							}
							else
							{
								$moisderfac = 0;
								$moisderfacnum = 0;
							}
	
// echo 'transportallerp'.$transportallerp;								

								if($loca->getEtatloc() == 'En location')
								{
									$finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent
									$finmoissec = strtotime ($finmois);	
								}
								elseif($loca->getEtatloc() == 'Location terminée')
								{
									$finmois = $loca->getFinloc();//Fin mois précédent
									$finmoissec = strtotime ($finmois);
									$loca->setCloture(1);
									$em->flush();
								}
									
								if($loca->getEtatloc() == 'En location' && strtotime($loca->getFinloc()) >= date('Y-m-01'))
								{
									$finloc = date('Y-m-t', strtotime(" -1 month"));
								}
								else
								{
									$finloc = $loca->getFinloc();
								}
								
								$em = $this->getDoctrine()->getManager();
								// $query = $em->createQuery(
									// 'SELECT m.oldid
									// FROM BaclooCrmBundle:Locationsslclone m
									// WHERE m.codemachineinterne = :codemachineinterne
									// ORDER BY m.id DESC');
								// $query->setMaxResults(1);
								// $query->setParameter('codemachineinterne', $loca->getCodemachineinterne());
								// $oldid = $query->getSingleResult();
// echo 'FINLOC';echo $finloc;	echo $loca->getCodemachineinterne();					
								$locationsclonedeja = $em->getRepository('BaclooCrmBundle:Locationsslclone')
									->findOneBy(array('oldid' => $loca->getId(), 'codemachineinterne' => $loca->getCodemachineinterne(), 'finloc' => $finloc));						

							
									$finlocsec = strtotime ($loca->getFinloc());	
									$dStart = $loca->getDebutloc();
									$dStartsec = strtotime ($loca->getDebutloc());
									$dEnd = $loca->getFinloc();
// echo 'xxxxxxxxxxxxxxxxx';echo $finmois; echo $loca->getFinloc();
									//Si date début antérieure au début du mois >> date début = début mois
									if($dStartsec <= $debutmoissec)
									{echo 'DIDAN';
										$dStart = $debutmois;
									}
									elseif($dStartsec < strtotime(date('Y-m-01')) && $dStartsec > $debutmoissec && $moisderfacnum == date('m', strtotime(" -1 month")))//si date début est mois dernier et dernière facturation = mois dernier.
									{echo 'DIDAN2';
										$dStart = date('Y-m-01');
									}
									else
									{
										$dStart = $loca->getDebutloc();
									}
									//Si date fin posterieure à fin du mois >> date fin = fin mois
									if($loca->getEtatloc() == 'Location terminée' and $finlocsec <= $todaysec and $finlocsec >= strtotime(date('Y-m-01')))
									{echo 'CAY';
										$dEnd = $loca->getFinloc();
										if(strtotime($loca->getDebutloc()) < strtotime(date('Y-m-01')))
										{echo 'GUY';
											$dStart = date('Y-m-01');
										}
										else
										{echo 'STLO';
											$dStart = $loca->getDebutloc();
										}
									}
									//si la date de début est supérieur à la fin du mois de facturation m-1 
									if($finlocsec >= $finmoissec)
									{
										if($loca->getEtatloc() == 'Location terminée')
										{//echo 'ici';
											$dEnd = $loca->getFinloc();
											$finmois = $loca->getFinloc();
											$finmoissec = strtotime ($finmois);

										}
										else
										{
											if($loca->getEtatloc() == 'En location')
											{
												$finmois = date('Y-m-t', strtotime(" -1 month"));//Fin mois précédent
												$finmoissec = strtotime ($finmois);
											}		
											$dEnd = $finmois;
										}
									}
									//Si date fin posterieure à fin du mois >> date début = début mois

										//Si date début après début de mois alors $dstart = $dstart on ne fait rien.
										
										//1.Récupérer les données de la table Locata cf supra
											   
										//2.On génère les entêtes de colonnes à partir de la fonction createplanning

										//on calcule le nombre de jours de location
										// echo $loca->getEntreprise();//echo $dStart;echo $dEnd;									
										$begin = new DateTime($dStart);
										$end = new DateTime($dEnd);
										$end = $end->modify( '+1 day' ); 

										$interval = DateInterval::createFromDateString('1 day');
										$period = new DatePeriod($begin, $interval, $end);
										$nbjloc = 0;
										$nbjlocass = 0;

										foreach ($period as $dt) {
											$newformat = $dt->format("D");
											$nbjlocass++;
											if($locata->getFacturersamedi() == 1 && $newformat == 'Sat')
											{
												$nbjloc++;
											}
											elseif($locata->getFacturerdimanche() == 1 && $newformat == 'Sun')
											{
												$nbjloc++;
											}
											elseif($newformat == 'Sat' or $newformat == 'Sun')
											{}
											else
											{
												$nbjloc++;
											}							
										}																

											//Création du montant HT ligne par ligne
											// $totalht = 0;//echo $locid;

											if(null !== $loca->getLoyerp1())
											{
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp1() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp1() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp1()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyerp2())
											{
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp2() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp2() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp2()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyerp3())

											{
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp3() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp3() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp3()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyerp4())
											{
												if($loca->getJour50()>0)
												{
													$jour50 += ($loca->getLoyerp4() * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loca->getLoyerp4() * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loca->getLoyerp4()) - $jour50 - $jour100;
											}
											elseif(null !== $loca->getLoyermensuel())
											{
												if($nbjloc < 20)
												{
													$loyer = $loca->getLoyermensuel()/$nbjloc;
												}
												else
												{
													$nbjloc = 20;													
													$loyer = ($loca->getLoyermensuel()/20);
												}													
												if($loca->getJour50()>0)
												{
													$jour50 += ($loyer * $loca->getjour50())*0.5;
												}
												if($loca->getJour100()>0)
												{
													$jour100 += ($loyer * $loca->getjour100());
												}
												$totalht += ($nbjloc * $loyer) - $jour50 - $jour100;
											}
											if(null !== $loca->getMontantcarb())
											{
												$montantcarb += $loca->getMontantcarb();
											}
echo 'LE LOCA GETMONTANTCARB'; echo $loca->getMontantcarb();											
											if(null !== $loca->getTransportaller() && $loca->getTransportaller()>0 && $loca->getDebutloc() >= $debutmois && $loca->getDebutloc() <= $finmois)
											{
												$transport += $loca->getTransportaller();
											}
											
											if(null !== $loca->getTransportretour() && $loca->getTransportretour()>0 && $loca->getFinloc() >= $debutmois && $loca->getFinloc() <= $finmois)
											{
												$transport += $loca->getTransportretour();
											}
								

							// echo 'xxx'.$nbjloc.'-'.$nbjloc*$loyer.'-'.$totalht.'xxx';

						
						// $facture->setEncompta(1);
						$loca->setDef(1);					
						$em->flush();	
						}
                        if($compte7061 > 0){$sl = 1;}
echo 'MONTANTCARB';echo $montantcarb;					
						//Si on est sur la première facture on clone les locataventes pour les facturer
						//Car les vente ne doivent êrte facturées qu'ne fois
						$montantlocaventes = 0; //Pour la vente
						$montantlocaventestot = 0;//Pour toutes les ventes

						foreach($locata->getLocataventesclone() as $ven)
						{	
							//Faut établir un montant global des ventes pour la facturation
							$montantlocaventestot += $ven->getMontantvente();//Pour toutes les ventes
							
						}

						if($newLocata->getRemise() > 0)
						{
							$totalht = $totalht - ($totalht * $newLocata->getRemise()/100);
						}
						//On vérifie si le transport aller a déjà été facturé
						$locatador = $em->getRepository('BaclooCrmBundle:Afacturer')
									->findOneBy(array('piece' => $locata->getId(), 'libelle' => 'Transport aller'));

						if($newLocata->getAssurance() > 0)
						{ 
							$rc = $newLocata->getAssurance(); 
						}
						else
						{
							$rc = 0; 
						}
						
						if($newLocata->getContributionverte() > 0)
						{
							$ecopart = $newLocata->getContributionverte();
						}
						else
						{
							$ecopart = 0;						
						}

						$compteclient = '411'.str_pad($newLocata->getClientid(), 3, "0", STR_PAD_LEFT);
						// echo 'montantcarb!!!';echo $montantcarb;
						if($locata->getRemise() > 0)
						{
							$totalhtfac = $newLocata->getMontantloc() - ($newLocata->getMontantloc()*($locata->getRemise()/100)) + $newLocata->getTransportaller() + $newLocata->getTransportretour() + $newLocata->getContributionverte() + $rc + $newLocata->getMontantlocavente() + $newLocata->getMontantcarb();
						}
						else
						{
							$totalhtfac = $newLocata->getMontantloc() + $newLocata->getTransportaller() + $newLocata->getTransportretour() + $newLocata->getContributionverte() + $rc + $newLocata->getMontantlocavente() + $newLocata->getMontantcarb();
						}//echo 'TOTALHTFACT'.$totalhtfac;echo 'MONTANTLOC'.$newLocata->getMontantloc();echo 'TALLER'.$newLocata->getTransportaller();echo 'TRETOUR'.$newLocata->getTransportretour();echo 'ASSURANCE'.$rc;echo 'ECOPA'.$newLocata->getContributionverte();
						$tva20 = $totalhtfac * 0.20;

                        $totalht = $totalhtfac;
						echo 'NUMFACTURE'.$facture->getNumfacture();echo 'ENCOMPTA'.$facture->getEncompta();
						$totalttc = $totalhtfac + $tva20;//echo 'totalttc'.$totalttc;echo 'tva'.$tva20;echo 'totalhtfac'.$totalhtfac;echo 'COMPTECLIENT'.$compteclient;echo 'LOCATA ID'.$locata->getId();
						// echo $compteclient;echo '----'.$totalttc;echo '------'.$locata->getId().'****';
						$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
										->findOneBy(array('compte'=>$compteclient, 'debit'=>$totalttc, 'piece'=>$facture->getNumfacture()));
                        $client = $em->getRepository('BaclooCrmBundle:Fiche')
                            ->findOneById($locata->getClientid());
						if(isset($journalori))
						{//echo ' ISSET JOURNALORI';
							$message = 1;
							$date = $journalori->getDate();
						}
						elseif(!isset($journalori) && $facture->getEncompta() == 0)//A verifier !!
						{
							$message = 0;
							$afacturer = new Afacturer;
							$afacturer->setDate($facture->getDatecrea());
							$afacturer->setJournal('VT');
							$afacturer->setCompte($compteclient);
							if($client->getTypeclient() == 'france')
							{echo 'france';
								$afacturer->setDebit($totalttc);
							}
							elseif($client->getTypeclient() == 'ue')
							{echo 'ue';
								$afacturer->setDebit($totalht);
							}
							elseif($client->getTypeclient() == 'export')
							{echo 'export';
								$afacturer->setDebit($totalht);
							}else{echo 'autre';$afacturer->setDebit($totalttc);	}
							$afacturer->setCredit(0);
							$afacturer->setLibelle($locata->getClient());
							$afacturer->setPiece($facture->getNumfacture());
							$afacturer->setEcheance($facture->getEcheance());
							$afacturer->setAnalytique('');
							$em->persist($afacturer);
							$em->flush();

							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($locata->getClientid());

                            //On débite le compte 700 utilisé
                            if($parc == 1)
                            {
                                foreach($locata->getLocationsclone() as $loca)
                                {
                                    $ftotalht = new Afacturer;
                                    $ftotalht->setDate($facture->getDatecrea());
                                    $ftotalht->setJournal('VT');
                                    if($client->getTypeclient() == 'france')
                                    {
                                        $ftotalht->setCompte('7064'.$loca->getMachineid());
                                    }
                                    elseif($client->getTypeclient() == 'ue')
                                    {
                                        $ftotalht->setCompte('7064'.$loca->getMachineid());
                                    }
                                    elseif($client->getTypeclient() == 'export')
                                    {
                                        $ftotalht->setCompte('7064'.$loca->getMachineid());
                                    }else{$ftotalht->setCompte('7064'.$loca->getMachineid());}
                                    $ftotalht->setDebit(0);

                                    if($locata->getRemise() > 0)
                                    {
                                        $ftotalht->setCredit($loca->getMontantloc() - ($loca->getMontantloc()*($locata->getRemise()/100)));
                                    }
                                    else
                                    {
                                        $ftotalht->setCredit($loca->getMontantloc());
                                    }
                                    $ftotalht->setLibelle($newLocata->getClient());
                                    $ftotalht->setPiece($facture->getNumfacture());
                                    $ftotalht->setEcheance('');
                                    $ftotalht->setAnalytique('Location de matériel de parc');
                                    $em->persist($ftotalht);
                                    $em->flush();
                                }
                            }
                            if($sl == 1)
                            {
                                foreach($locata->getLocationsslclone() as $loca)
                                {
                                    $ftotalht = new Afacturer;
                                    $ftotalht->setDate($facture->getDatecrea());
                                    $ftotalht->setJournal('VT');
                                    if($client->getTypeclient() == 'france')
                                    {
                                        $ftotalht->setCompte('706100');
                                    }
                                    elseif($client->getTypeclient() == 'ue')
                                    {
                                        $ftotalht->setCompte('706120');
                                    }
                                    elseif($client->getTypeclient() == 'export')
                                    {
                                        $ftotalht->setCompte('706120');
                                    }else{$ftotalht->setCompte('706100');}
                                    $ftotalht->setDebit(0);

                                    if($locata->getRemise() > 0)
                                    {
                                        $ftotalht->setCredit($loca->getMontantloc() - ($loca->getMontantloc()*($locata->getRemise()/100)));
                                    }
                                    else
                                    {
                                        $ftotalht->setCredit($loca->getMontantloc());
                                    }
                                    $ftotalht->setLibelle($newLocata->getClient());
                                    $ftotalht->setPiece($facture->getNumfacture());
                                    $ftotalht->setEcheance('');
                                    $ftotalht->setAnalytique('Location de matériel de sous location');
                                    $em->persist($ftotalht);
                                    $em->flush();
                                }
                            }
echo 'MONTANTLOCATAVENTET TOT'.$montantlocaventestot;
							if($montantlocaventestot > 0)
							{
								//Produits annexes
								$ventes = new Afacturer;
								$ventes->setDate($facture->getDatecrea());
								$ventes->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$ventes->setCompte(708810);
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$ventes->setCompte(708810);
								}
								elseif($client->getTypeclient() == 'export')
								{
									$ventes->setCompte(708810);
								}else{$ventes->setCompte(708810);}
								$ventes->setDebit(0);
								$ventes->setCredit($montantlocaventestot);
								$ventes->setLibelle($newLocata->getClient());
								$ventes->setPiece($facture->getNumfacture());
								$ventes->setEcheance('');
								$ventes->setAnalytique('Autres ventes');
								$em->persist($ventes);
								$em->flush();
							}
							
							 if($montantcarb > 0)
							 {

								 $carburant = new Afacturer;
								 $carburant->setDate($facture->getDatecrea());
								 $carburant->setJournal('VT');
								 if($client->getTypeclient() == 'france')
								 {

									 $carburant->setCompte(7065300);
								 }

								 elseif($client->getTypeclient() == 'ue')
								 {

									 $carburant->setCompte(7065310);
								 }

								 elseif($client->getTypeclient() == 'export')
								 {

									 $carburant->setCompte(706535);
								 }else{$carburant->setCompte(706535);}
								 $carburant->setDebit(0);
								 $carburant->setCredit($montantcarb);
								 $carburant->setLibelle($newLocata->getClient());
								 $carburant->setPiece($facture->getNumfacture());
								 $carburant->setEcheance($facture->getEcheance());
								 $carburant->setAnalytique('Vente de carburant');
								 $em->persist($carburant);
								 $em->flush();
							 }

					
							if($client->getTypeclient() == 'france' or $client->getTypeclient() == '')
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('VT');
								$ftva->setCompte(445710);
								$ftva->setDebit(0);			
								$ftva->setCredit($tva20);			
								$ftva->setLibelle($locata->getClient());		
								$ftva->setPiece($facture->getNumfacture());				
								$ftva->setEcheance('');			
								$ftva->setAnalytique('TVA');
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
									$fassurance->setCompte(7065100);
									$fassurance->setLibelle($locata->getClient());
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$fassurance->setCompte(706512);
									$fassurance->setLibelle($locata->getClient());	
								}
								elseif($client->getTypeclient() == 'export')
								{
									$fassurance->setCompte(706512);
									$fassurance->setLibelle($locata->getClient());	
								}
								else
								{
									$fassurance->setCompte(706510);
									$fassurance->setLibelle($locata->getClient());	
								}
								$fassurance->setDebit(0);			
								$fassurance->setCredit($rc);			
								$fassurance->setPiece($facture->getNumfacture());				
								$fassurance->setEcheance('');			
								$fassurance->setAnalytique('Assurance');
								$em->persist($fassurance);
								$em->flush();					
							}
							
							if($newLocata->getContributionverte() > 0)
							{
								$fecopart = new Afacturer;
								$fecopart->setDate($facture->getDatecrea());
								$fecopart->setJournal('VT');
								$fecopart->setCompte(705200);
								$fecopart->setDebit(0);
								$fecopart->setCredit($ecopart);
								$fecopart->setLibelle($locata->getClient());
								$fecopart->setPiece($facture->getNumfacture());
								$fecopart->setEcheance('');
								$fecopart->setAnalytique('Contribution verte');
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
									$taller->setCompte(706540);
									$taller->setLibelle($locata->getClient());	
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$taller->setCompte(706542);
									$taller->setLibelle($locata->getClient());			
								}
								elseif($client->getTypeclient() == 'export')
								{
									$taller->setCompte(706542);
									$taller->setLibelle($locata->getClient());
								}
								else
								{
									$taller->setCompte(706540);
									$taller->setLibelle($locata->getClient());
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
								$taller->setEcheance('');			
								$taller->setAnalytique('Transport');
								$em->persist($taller);
								$em->flush();					
							}
							
							// if($locata->getTransportretour() > 0)
							// {
								// $tretour = new Afacturer;
								// $tretour->setDate($facture->getDatecrea());
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
								// }else{$ftotalht->setCompte(706100);}
								// $tretour->setDebit(0);			
								// $tretour->setCredit($locata->getTransportretour());			
								// $tretour->setPiece($facture->getNumfacture());				
								// $tretour->setEcheance($facture->getEcheance());			
								// $tretour->setAnalytique('Transport retour');
								// $em->persist($tretour);
								// $em->flush();					
							// }
								
								//Ajout à la table factures
									// $facta = $em->getRepository('BaclooCrmBundle:Facta')
												// ->findOneByControle('1234');

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
elseif($doc == 'achats' or $doc == 'achatspeed')
{
	            echo 'ACHATDEF';
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
					$assurances_materiels_lignes = 0;
					$assurance_rcp_lignes = 0;
					$consommables_materiels_lignes = 0;
					$carburant_lignes = 0;
					$carburant_d_entretien_lignes = 0;
					$credit_bailmobilier_lignes = 0;
					$documentation_generale_lignes = 0;
					$dons_et_pourboires_lignes = 0;
					$electricite_eau_lignes = 0;
					$entretien_materiels_lignes = 0;
					$entretien_mat_transport_lignes = 0;
					$frais_bancaires_lignes = 0;
					$frais_d_actes_lignes = 0;
					$frais_de_placements_lignes = 0;
					$frais_postaux_lignes = 0;
					$fourn_administratives_lignes = 0;
					$honoraires_comptable_lignes = 0;
					$honoraires_juridique_lignes = 0;
					$location_geolocalisation_lignes = 0;
					$location_de_materiel_lignes = 0;
					$maintenance_informatique_lignes = 0;
					$petites_fournitures_et_outillage_lignes = 0;
					$publicite_communication_lignes = 0;
					$telephone_lignes = 0;
// echo 'nbloc'.$nbloc;echo 'etatbdc'.$locatafrs->getEtatbdc();
					//Point 1 : pas de loc
					//S'il 'n ya pas de factures avec ce n°de bdc et que le bdc à facturer a été validé
					//et qu'il n'y a pas de location dessus et au moins 1 autre achat, on gènère la facturation
//echo 'tttt'.$typeachat;exit();
                    if($typeachat == 'normal')
					{
						include('achatnormaldef.php');
					}//S'il y a un mélange de Locations et d'achats					
					else
					{//echo 'point2';exit();
						include('achatsouslocdef.php');	
					}
						$comptefrs = '401'.$locatafrs->getFournisseurid();
						
						$totalhtfac = $facture->getTotalht();
						$totalttc = $facture->getTotalttc();

//                        if(($client->getTypeclient() == 'france' or $client->getTypeclient() == '') and $sanstva == 0)
//                        {
//                            $tva20 = $totalhtfac * 0.20;
//                            $totalttc = $totalhtfac + $tva20;//echo 'totalhtfac'.$totalhtfac;
//                        }
//                        else
//                        {
//                            $tva20 = 0;
//                            $totalttc = $totalhtfac;//echo 'totalhtfac'.$totalhtfac;
//                        }
                            $tva20 = $facture->getTotalttc() - $facture->getTotalht();
							$message = 0;
							$afacturer2 = new Afacturer;
							$afacturer2->setDate($facture->getDatecrea());
							$afacturer2->setJournal('ACH');
							$afacturer2->setCompte($comptefrs);
							$afacturer2->setDebit(0);			
							$afacturer2->setCredit($totalttc);			
							$afacturer2->setLibelle($locatafrs->getFournisseur());			
							$afacturer2->setPiece($facture->getNumfacfrs());			
							$afacturer2->setEcheance($facture->getEcheance());			
							$afacturer2->setModepaiement($facture->getModepaiement());
							$afacturer2->setAnalytique('');
							$em->persist($afacturer2);
							$em->flush();
										
							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($locatafrs->getFournisseurid());
echo 'FAAAACT';						
							$assmat = 0;
							$assrcp = 0;
							$consmat = 0;
							$carb = 0;
							$carbent = 0;
							$credbailmob = 0;
							$docgene = 0;
							$dons = 0;
							$elec = 0;
							$entretmat = 0;
							$entretmattrsp = 0;
							$fraisbanc = 0;
							$fraisactes = 0;
							$fraisdep = 0;
							$fraispost = 0;
							$fournadm = 0;
							$honocompta = 0;
							$honojur = 0;
							$locgeoloc = 0;
							$locmat = 0;
							$mainteinfo = 0;
							$petfourn = 0;
							$pubcom = 0;
							$tel = 0;

							foreach($locatafrsget as $locationsfrs)
							{//echo 'point1'.$locationsfrs->getReference();exit();
								if($locationsfrs->getReference() == 'Assurances Matériels' && $assmat == 0)
								{
									$location = new Afacturer;
									$location->setDate($facture->getDatecrea());
									$location->setJournal('ACH');
									$location->setCompte(61600000);
//                                    $locationlignes += $locationsfrs->getMontantht();
									$location->setDebit($assurances_materiels_lignes);
									$location->setCredit(0);			
									$location->setLibelle($locatafrs->getFournisseur());			
									$location->setPiece($facture->getNumfacfrs());				
									$location->setPiece($facture->getNumfacfrs());
									$location->setEcheance('');
									$location->setAnalytique('Assurances Matériels');
									$em->persist($location);
									$em->flush();
                                    $assmat++;
								}
								elseif($locationsfrs->getReference() == 'Assurance RCP' && $assrcp == 0)
								{
									$piece = new Afacturer;
									$piece->setDate($facture->getDatecrea());
									$piece->setJournal('ACH');
									$piece->setCompte(61610000);
//                                    $piecelignes += $locationsfrs->getMontantht();
									$piece->setDebit($assurance_rcp_lignes);
									$piece->setCredit(0);			
									$piece->setLibelle($locatafrs->getFournisseur());			
									$piece->setPiece($facture->getNumfacfrs());				
									$piece->setEcheance('');			
									$piece->setAnalytique('Assurance RCP');
									$em->persist($piece);
									$em->flush();
                                    $assrcp++;
								}
								// elseif(($locationsfrs->getReference() == 'transport' or $locationsfrs->getReference() == 'transportaller' or $locationsfrs->getReference() == 'transportretour') && $t == 0)
								elseif($locationsfrs->getReference() == 'Consommables matériels' && $consmat == 0)
								{
									$transport = new Afacturer;
									$transport->setDate($facture->getDatecrea());
									$transport->setJournal('ACH');
									$transport->setCompte(60230000);
//									$transportlignes += $locationsfrs->getMontantht();
									$transport->setDebit($consommables_materiels_lignes);
									$transport->setCredit(0);			
									$transport->setLibelle($locatafrs->getFournisseur());			
									$transport->setPiece($facture->getNumfacfrs());				
									$transport->setEcheance('');			
									$transport->setAnalytique('Consommables matériels');
									$em->persist($transport);
									$em->flush();
                                    $consmat++;
								}
								elseif($locationsfrs->getReference() == 'Carburant' && $carb == 0)
								{
									$prestation = new Afacturer;
									$prestation->setDate($facture->getDatecrea());
									$prestation->setJournal('ACH');
									$prestation->setCompte(60230000);
//                                    $prestationlignes += $locationsfrs->getMontantht();
									$prestation->setDebit($carburant_lignes);
									$prestation->setCredit(0);			
									$prestation->setLibelle($locatafrs->getFournisseur());			
									$prestation->setPiece($facture->getNumfacfrs());				
									$prestation->setEcheance('');			
									$prestation->setAnalytique('Carburant');
									$em->persist($prestation);
									$em->flush();
									$carb++;
								}
								elseif($locationsfrs->getReference() == 'Carburant d entretien' && $carbent == 0)
								{
									$prestation = new Afacturer;
									$prestation->setDate($facture->getDatecrea());
									$prestation->setJournal('ACH');
									$prestation->setCompte(60614000);
//                                    $prestationlignes += $locationsfrs->getMontantht();
									$prestation->setDebit($carburant_d_entretien_lignes);
									$prestation->setCredit(0);
									$prestation->setLibelle($locatafrs->getFournisseur());
									$prestation->setPiece($facture->getNumfacfrs());
									$prestation->setEcheance('');
									$prestation->setAnalytique('Carburant d entretien');
									$em->persist($prestation);
									$em->flush();
									$carbent++;
								}
								elseif($locationsfrs->getReference() == 'Crédit bail mobilier (structure/frais généraux)' && $credbailmob == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(61220000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($credit_bailmobilier_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());			
									$materiel->setPiece($facture->getNumfacfrs());				
									$materiel->setEcheance('');			
									$materiel->setAnalytique('Crédit bail mobilier');
									$em->persist($materiel);
									$em->flush();
									$credbailmob++;
								}
								elseif($locationsfrs->getReference() == 'Documentation generale' && $docgene == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(61820000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($documentation_generale_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Documentation generale');
									$em->persist($materiel);
									$em->flush();
									$docgene++;
								}
								elseif($locationsfrs->getReference() == 'Dons et pourboirs' && $dons == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62380000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($dons_et_pourboires_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Dons et pourboirs');
									$em->persist($materiel);
									$em->flush();
									$dons++;
								}
								elseif($locationsfrs->getReference() == 'Electricité - eau' && $elec == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(6071);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($electricite_eau_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Electricité - eau');
									$em->persist($materiel);
									$em->flush();
									$elec++;
								}
								elseif($locationsfrs->getReference() == 'Entretien matériels' && $entretmat == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(60611000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($entretien_materiels_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Entretien matériels');
									$em->persist($materiel);
									$em->flush();
									$entretmat++;
								}
								elseif($locationsfrs->getReference() == 'Entretien mat transport' && $entretmattrsp == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(61552000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($entretien_mat_transport_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Entretien mat transport');
									$em->persist($materiel);
									$em->flush();
									$entretmattrsp++;
								}
								elseif($locationsfrs->getReference() == 'Frais bancaires' && $fraisbanc == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62750000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($frais_bancaires_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Frais bancaires');
									$em->persist($materiel);
									$em->flush();
									$fraisbanc++;
								}
								elseif($locationsfrs->getReference() == 'Frais d actes (formalités)' && $fraisactes == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62263001);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($frais_d_actes_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Frais d actes (formalités)');
									$em->persist($materiel);
									$em->flush();
									$fraisactes++;
								}
								elseif($locationsfrs->getReference() == 'Frais deplacements' && $fraisdep == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62510000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($frais_de_placements_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Frais deplacements');
									$em->persist($materiel);
									$em->flush();
									$fraisdep++;
								}
								elseif($locationsfrs->getReference() == 'Frais postaux' && $fraispost == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62640000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($frais_postaux_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Frais postaux');
									$em->persist($materiel);
									$em->flush();
									$fraispost++;
								}
								elseif($locationsfrs->getReference() == 'Fourn administratives' && $fournadm == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(6071);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($fourn_administratives_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Fourn administratives');
									$em->persist($materiel);
									$em->flush();
									$fournadm++;
								}
								elseif($locationsfrs->getReference() == 'Honoraires comptable' && $honocompta == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(60640000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($honoraires_comptable_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Honoraires comptable');
									$em->persist($materiel);
									$em->flush();
									$honocompta++;
								}
								elseif($locationsfrs->getReference() == 'Honoraires juridique' && $honojur == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62263000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($honoraires_juridique_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Honoraires juridique');
									$em->persist($materiel);
									$em->flush();
									$honojur++;
								}
								elseif($locationsfrs->getReference() == 'Location géolocalisation' && $locgeoloc == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(61385000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($location_geolocalisation_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Location géolocalisation');
									$em->persist($materiel);
									$em->flush();
									$locgeoloc++;
								}
								elseif($locationsfrs->getReference() == 'Location de matériel' && $locmat == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte('6044'.$locationsfrs->getMachineid());//echo 'mmmmm'.$typeachat;exit();
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($location_de_materiel_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Location de matériel');
									$em->persist($materiel);
									$em->flush();
									$locmat++;
								}
								elseif($locationsfrs->getReference() == 'Maintenance informatique' && $mainteinfo == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(61560000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($maintenance_informatique_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Maintenance informatique');
									$em->persist($materiel);
									$em->flush();
									$mainteinfo++;
								}
								elseif($locationsfrs->getReference() == 'Petites fournitures et outillage' && $petfourn == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(60636000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($petites_fournitures_et_outillage_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Petites fournitures et outillage');
									$em->persist($materiel);
									$em->flush();
									$petfourn++;
								}
								elseif($locationsfrs->getReference() == 'Publicite-communication' && $pubcom == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(6071);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($publicite_communication_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Publicite-communication');
									$em->persist($materiel);
									$em->flush();
									$pubcom++;
								}
								elseif($locationsfrs->getReference() == 'Telephone' && $tel == 0)
								{
									$materiel = new Afacturer;
									$materiel->setDate($facture->getDatecrea());
									$materiel->setJournal('ACH');
									$materiel->setCompte(62300000);
//                                    $autrelignes += $locationsfrs->getMontantht();
									$materiel->setDebit($telephone_lignes);
									$materiel->setCredit(0);
									$materiel->setLibelle($locatafrs->getFournisseur());
									$materiel->setPiece($facture->getNumfacfrs());
									$materiel->setEcheance('');
									$materiel->setAnalytique('Telephone');
									$em->persist($materiel);
									$em->flush();
									$tel++;
								}
								$locationsfrs->setDef(1);						
								$em->flush();
							}
							
							if(($client->getTypeclient() == 'france' or $client->getTypeclient() == '') and $sanstva == 0)
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('ACH');
								$ftva->setCompte(44566000);
								$ftva->setDebit($tva20);
								$ftva->setCredit(0);			
								$ftva->setLibelle($locatafrs->getFournisseur());
								$ftva->setPiece($facture->getNumfacfrs());
								$ftva->setEcheance('');			
								$ftva->setAnalytique('TVA');
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
						// $facture->setEncompta(1);						
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
//echo $codecontrat;
// print_r($facturemois);
					$totalht = 0;//echo $locid;			
					$venteslignes = 0;
                    $locationlignes = 0;
					$remiselignes = 0;
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
							if($loca->getCodifvente() == 'remise')
							{
                                $remiselignes += $montantligne;
								$descriptionremise[] = $loca->getDescription();
							}
							if($loca->getCodifvente() == 'vente')
							{
								$venteslignes += $montantligne;
								$descriptionvente[] = $loca->getDescription();
							}
                            elseif($loca->getCodifvente() == 'location')
                            {
                                $locationlignes += $montantligne;
                                $descriptionlocation[] = $loca->getDescription();
                            }
							elseif($loca->getCodifvente() == 'entretien')
							{
								$entretienlignes += $montantligne;
								$descriptionentretien[] = $loca->getDescription();
							}
							elseif($loca->getCodifvente() == 'carburant')
							{
								$carburantlignes+= $montantligne;
								$descriptioncarburant[] = $loca->getDescription();
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
						$compteclient = '411'.str_pad($venda->getClientid(), 3, "0", STR_PAD_LEFT);
						$client = $em->getRepository('BaclooCrmBundle:Fiche')
									->findOneById($venda->getClientid());
						
						$tva20 = $venda->getMontantvente() * 0.20;
						if($venda->getRemise() > 0)
						{
                            $remise = $venda->getMontantvente() * ($venda->getRemise()/100);
                            $totalaremiser = $venda->getMontantvente() - $remise;
                            $tva20 = $totalaremiser * 0.20;
                            $tva20 = round($tva20, 2);
                            $totalhtfac = $venda->getMontantvente() - ($venda->getMontantvente()*($venda->getRemise()/100));$totalhtfac = $venda->getMontantvente() - ($venda->getMontantvente()*($venda->getRemise()/100));
						}
						else
						{
							$tva20 = $venda->getMontantvente() * 0.20;
							$totalhtfac = $venda->getMontantvente();
						}
						if($client->getTypeclient() == 'france' or null === $client->getTypeclient())
						{
							$totalttc = $totalhtfac + $tva20;
						}
						else
						{
							$totalttc = $totalhtfac;
						}
$totalht = $totalhtfac;
						//Avant de saisir les écritures on vérifie qu'elle n'aient pas déjà été saisies
						$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
										->findOneBy(array('compte'=>$compteclient, 'debit'=>$totalttc, 'piece'=>$facture->getNumfacture()));
						if(isset($journalori))
						{
							$message = 1;
							$date = $journalori->getDate();
						}
						else
						{
							$message = 0;
							$afacturer2 = new Afacturer;
							$afacturer2->setDate($facture->getDatecrea());
							$afacturer2->setJournal('VT');
							$afacturer2->setCompte($compteclient);
                            if($client->getTypeclient() == 'france')
                            {echo 'france';
                                $afacturer2->setDebit($totalttc);
                            }
                            elseif($client->getTypeclient() == 'ue')
                            {echo 'ue';
                                $afacturer2->setDebit($totalht);
                            }
                            elseif($client->getTypeclient() == 'export')
                            {echo 'export';
                                $afacturer2->setDebit($totalht);
                            }else{echo 'autre';$afacturer2->setDebit($totalttc);	}
							$afacturer2->setCredit(0);			
							$afacturer2->setLibelle($venda->getClient());			
							$afacturer2->setPiece($facture->getNumfacture());			
							$afacturer2->setEcheance($facture->getEcheance());			
							$afacturer2->setAnalytique('');
							$em->persist($afacturer2);
							$em->flush();
										
							$client = $em->getRepository('BaclooCrmBundle:Fiche')
										->findOneById($venda->getClientid());
						
						$v = 0;
						$e = 0;
						$t = 0;
                        $loc = 0;
						$ass = 0;
						$ann = 0;
						
						foreach($venda->getVentes() as $vente)
						{
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
								elseif($client->getTypeclient() == 'export' and $venda->getSanstva() == 1)
								{
									$ventes->setCompte(707115);		
								}else{$ventes->setCompte(707115);}
								$ventes->setDebit(0);
								if($venda->getRemise() > 0)
								{
									$ventes->setCredit($venteslignes-($venteslignes*$venda->getRemise()/100)+$remiselignes);
								}
								else
								{//echo 'ici'.$remise;exit();
									$ventes->setCredit($venteslignes+$remiselignes);
								}									
								$ventes->setLibelle($venda->getClient());			
								$ventes->setPiece($facture->getNumfacture());				
								$ventes->setEcheance('');			
								$ventes->setAnalytique('Vente');
								$em->persist($ventes);
								$em->flush();
								$v++;
							}
                            elseif($vente->getCodifvente() == 'location' && $loc == 0)
                            {echo 'location';
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
                                }
                                elseif($venda->getTvaliq() == 1)
                                {
                                    $ftotalht->setCompte(706115);
                                }else{$ftotalht->setCompte(706100);}
                                $ftotalht->setDebit(0);

                                if($venda->getRemise() > 0)
                                {
                                    $ftotalht->setCredit($locationlignes-($locationlignes*$venda->getRemise()/100));
                                }
                                else
                                {
                                    $ftotalht->setCredit($locationlignes);
                                }
                                $ftotalht->setLibelle($venda->getClient());
                                $ftotalht->setPiece($facture->getNumfacture());
                                $ftotalht->setEcheance($facture->getEcheance());
                                $ftotalht->setAnalytique('Loc');
                                $em->persist($ftotalht);
                                $em->flush();
                                $loc++;
                            }
							elseif($vente->getCodifvente() == 'entretien' && $e == 0)
							{
								$entretien = new Afacturer;
								$entretien->setDate($facture->getDatecrea());
								$entretien->setJournal('VT');
								if($client->getTypeclient() == 'france')
								{
									$entretien->setCompte(706560);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$entretien->setCompte(706561);		
								}
								elseif($client->getTypeclient() == 'export' and $venda->getSanstva() == 1)
								{
									$entretien->setCompte(706562);		
								}else{$entretien->setCompte(706560);}
								$entretien->setDebit(0);			
								if($venda->getRemise() > 0)
								{
									$entretien->setCredit($entretienlignes-($entretienlignes*$venda->getRemise()/100));
								}
								else
								{
									$entretien->setCredit($entretienlignes);
								}			
								$entretien->setLibelle($venda->getClient());			
								$entretien->setPiece($facture->getNumfacture());				
								$entretien->setEcheance('');			
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
									$transport->setCompte(706540);		
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$transport->setCompte(706542);
								}
								elseif($client->getTypeclient() == 'export' and $venda->getSanstva() == 1)
								{
									$transport->setCompte(706542);		
								}else{$transport->setCompte(706540);}
								$transport->setDebit(0);			
								$transport->setCredit($transportlignes);			
								if($venda->getRemise() > 0)
								{
									$transport->setCredit($transportlignes-($transportlignes*$venda->getRemise()/100));
								}
								else
								{
									$transport->setCredit($transportlignes);
								}			
								$transport->setLibelle($venda->getClient());			
								$transport->setPiece($facture->getNumfacture());				
								$transport->setEcheance('');			
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
									$assurance->setCompte(706510);
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$assurance->setCompte(706512);
								}
								elseif($client->getTypeclient() == 'export' and $venda->getSanstva() == 1)
								{
									$assurance->setCompte(706512);
								}else{$assurance->setCompte(706510);}
								$assurance->setDebit(0);						
								if($venda->getRemise() > 0)
								{
									$assurance->setCredit($assurancelignes-($assurancelignes*$venda->getRemise()/100));
								}
								else
								{
									$assurance->setCredit($assurancelignes);
								}			
								$assurance->setLibelle($venda->getClient());			
								$assurance->setPiece($facture->getNumfacture());				
								$assurance->setEcheance('');			
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
									$annexes->setCompte(708800);
								}
								elseif($client->getTypeclient() == 'ue')
								{
									$annexes->setCompte(708802);
								}
								elseif($client->getTypeclient() == 'export' and $venda->getSanstva() == 1)
								{
									$annexes->setCompte(708802);
								}else{$annexes->setCompte(708800);}
								$annexes->setDebit(0);									
								if($venda->getRemise() > 0)
								{
									$annexes->setCredit($annexeslignes-($annexeslignes*$venda->getRemise()/100));
								}
								else
								{
									$annexes->setCredit($annexeslignes);
								}			
								$annexes->setLibelle($venda->getClient());			
								$annexes->setPiece($facture->getNumfacture());				
								$annexes->setEcheance('');			
								$annexes->setAnalytique('annexes');
								$em->persist($annexes);
								$em->flush();
								$ann++;
							}
						}//echo 'liiii'.($venteslignes+$remise);echo 'idd'.$venda->getId();exit();
// echo 'typeclient'.$client->getTypeclient();							
							if($client->getTypeclient() == 'france' or $client->getTypeclient() == '')
							{
								$ftva = new Afacturer;
								$ftva->setDate($facture->getDatecrea());
								$ftva->setJournal('VT');
								$ftva->setCompte(445710);
								$ftva->setDebit(0);			
								$ftva->setCredit($tva20);			
								$ftva->setLibelle($venda->getClient());		
								$ftva->setPiece($facture->getNumfacture());				
								$ftva->setEcheance('');			
								$ftva->setAnalytique('');
								$em->persist($ftva);
								$em->flush();						
							}				
						}
						
	// $facture->setEncompta(1);						
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

    $compte7061 = 0;//Location sous loc
    $compte7064 = 0;//Location parc
    $parc = 0;
    $sl = 0;
    foreach($locata->getLocationsclone() as $loca)
    {
        $compte7064 += $loca->getMontantloc();
    }
    if($compte7064 > 0){$parc = 1;}

    foreach($locata->getLocationsslclone() as $loca)
    {
        $compte7061 += $loca->getMontantloc();
    }
    if($compte7061 > 0){$sl = 1;}
	$totalttc = $facture->getTotalttc();
	$totalht = $facture->getTotalht();
	$tva = $totalttc - $totalht;
	$commentaire = $facture->getCommentaire();
	//PASSAGE DES ECRITURES DES AVOIRS

	//avant de passer les écritures on vérifie qu'elles n'existent pas deja dans le journalori
	$compteclient = '411'.$locata->getClientid();
	$journalori = $em->getRepository('BaclooCrmBundle:Afacturer')
					->findOneBy(array('compte'=>$compteclient, 'credit'=>$facture->getTotalttc(), 'piece'=>$facture->getNumfacture()));
					
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
        if($parc == 1)
        {
            $ftotalht = new Afacturer;
            $ftotalht->setDate($facture->getDatecrea());
            $ftotalht->setJournal('VT');
            if($client->getTypeclient() == 'france')
            {
                $ftotalht->setCompte(7064);
            }
            elseif($client->getTypeclient() == 'ue')
            {
                $ftotalht->setCompte(7064);
            }
            elseif($client->getTypeclient() == 'export')
            {
                $ftotalht->setCompte(7064);
            }else{$ftotalht->setCompte(7064);}
            $ftotalht->setDebit($compte7064);
            $ftotalht->setCredit(0);
            $ftotalht->setLibelle($locata->getClient());
            $ftotalht->setPiece($facture->getNumfacture());
            $ftotalht->setEcheance('');
            $ftotalht->setAnalytique('Locaction matériel de parc');
            $em->persist($ftotalht);
        }
        if($sl == 1)
        {
            $ftotalht = new Afacturer;
            $ftotalht->setDate($facture->getDatecrea());
            $ftotalht->setJournal('VT');
            if($client->getTypeclient() == 'france')
            {
                $ftotalht->setCompte(706100);
            }
            elseif($client->getTypeclient() == 'ue')
            {
                $ftotalht->setCompte(706100);
            }
            elseif($client->getTypeclient() == 'export')
            {
                $ftotalht->setCompte(706100);
            }else{$ftotalht->setCompte(706100);}
            $ftotalht->setDebit($compte7061);
            $ftotalht->setCredit(0);
            $ftotalht->setLibelle($locata->getClient());
            $ftotalht->setPiece($facture->getNumfacture());
            $ftotalht->setEcheance('');
            $ftotalht->setAnalytique('Location matériel sous location');
            $em->persist($ftotalht);
        }
		
		//On débite le compte assurance si assurance facturé
		if($locata->getAssurance() == 1)
		{
			$fassurance= new Afacturer;
			$fassurance->setDate($facture->getDatecrea());
			$fassurance->setJournal('VT');
			if($client->getTypeclient() == 'france')
			{
				$fassurance->setCompte(706200);			
				$fassurance->setLibelle($locata->getClient());
			}
			elseif($client->getTypeclient() == 'ue')
			{
				$fassurance->setCompte(706201);			
				$fassurance->setLibelle($locata->getClient());		
			}
			elseif($client->getTypeclient() == 'export')
			{
				$fassurance->setCompte(706202);			
				$fassurance->setLibelle($locata->getClient());		
			}
			else
			{
				$fassurance->setCompte(706200);			
				$fassurance->setLibelle($locata->getClient());
			}
			$fassurance->setDebit($assurance);			
			$fassurance->setCredit(0);			
			$fassurance->setPiece($facture->getNumfacture());				
			$fassurance->setEcheance('');			
			$fassurance->setAnalytique('Loc');
			$em->persist($fassurance);					
		}
		
		//On débite le compte TVA si client france
		if($client->getTypeclient() == 'france' or $client->getTypeclient() == '')
		{
			$ftva = new Afacturer;
			$ftva->setDate($facture->getDatecrea());
			$ftva->setJournal('VT');
			$ftva->setCompte(445710);
			$ftva->setDebit($tva);			
			$ftva->setCredit(0);			
			$ftva->setLibelle($locata->getClient());			
			$ftva->setPiece($facture->getNumfacture());				
			$ftva->setEcheance('');			
			$ftva->setAnalytique('TVA');
			$em->persist($ftva);						
		}				
		
		//On crédite 411
		$afacturer = new Afacturer;
		$afacturer->setDate($facture->getDatecrea());
		$afacturer->setJournal('VT');
		$afacturer->setCompte($compteclient);
		$afacturer->setDebit(0);
        if($client->getTypeclient() == 'france')
        {echo 'france';
            $afacturer->setCredit($totalttc);
        }
        elseif($client->getTypeclient() == 'ue')
        {echo 'ue';
            $afacturer->setCredit($totalht);
        }
        elseif($client->getTypeclient() == 'export')
        {echo 'export';
            $afacturer->setCredit($totalht);
        }else{echo 'autre';$afacturer->setCredit($totalttc);	}		
		$afacturer->setLibelle($locata->getClient());			
		$afacturer->setPiece($facture->getNumfacture());			
		$afacturer->setEcheance($facture->getEcheance());			
		$afacturer->setAnalytique('');
		$em->persist($afacturer);
		// $facture->setEncompta(1);						
		$em->flush();	
		//Fin ajout table factures				
	}				   
}
//PARTIE CONTROLE DESEQUILIBRE ECRITURE	
$equilibre = $em->getRepository('BaclooCrmBundle:Afacturer')
				->findByPiece($facture->getNumfacture());
$debit = 0;
$credit = 0;
foreach($equilibre as $equi)
{
	if($equi->getDebit() > 0){$debit += $equi->getdebit();}
	if($equi->getCredit() > 0){$credit += $equi->getCredit();}
}
if($debit - $credit != 0)
{
	$mailer = $this->get('mailer');				
	
		$message = \Swift_Message::newInstance()
			->setSubject('FGG Location : L écriture pour la facture '.$facture->getNumfacture().' est déséquilibrée')
			->setFrom(array('bacloo@bacloo.fr' => 'Bacloo CRM'))
			->setTo('ringuetjm@gmail.com')
			->setBody('Equiture déséquilibrée', 'text/html')
		;
		$mailer->send($message);
}
//FIN PARTIE CONTROLE DESEQUILIBRE ECRITURE	
$facture->setEncompta(1);						
$em->flush();
//FIN FACTURATION MENSUELLE