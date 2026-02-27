<?php
					//GENERATION DES BDC AUTOMATIQUES
							
						//On est dans contrat, on vérifie s'il s'agit d'une sous-location
						if(null !== $loc->getDebutloc() && null !== $loc->getFinloc())
						{		echo '1 ';											
							//Si c'est une sous-location, on vérifie qu'un bdc (locatafrs) n'a pas été créé pour cette sl.
								$bdc  = $em->getRepository('BaclooCrmBundle:Locatafrs')		
										->findOneBy(array('codelocatasl' => $locata->getId(), 'fournisseur' => $loc->getLoueur()));
									
								//Si pas de Locatafrs, on créée un new
								if(!isset($bdc))
								{echo '2 ';	
									$bdcauto = new Locatafrs;
									$bdcauto->setChantierid($locata->getChantierid());
									$bdcauto->setNomchantier($locata->getNomchantier());
									$bdcauto->setAdresse1($locata->getAdresse1());
									$bdcauto->setAdresse2($locata->getAdresse2());
									$bdcauto->setAdresse3($locata->getAdresse3());
									$bdcauto->setCp($locata->getCp());
									$bdcauto->setVille($locata->getVille());
									$bdcauto->setFournisseurid($loc->getLoueurid());
									$bdcauto->setFournisseur($loc->getLoueur());				
									$bdcauto->setUser($locata->getUser());
									$bdcauto->setContact($locata->getContactchantier());
									$bdcauto->setDatemodif($locata->getDatemodif());
									$bdcauto->setAnnulee(0);
									$bdcauto->setEtatbdc(0);
									$bdcauto->setMontantloc($montantloclocatafrs);//Montant HT de la sous-loc. déterminer plus bas
									$bdcauto->setCommentaire($locata->getCommentaire());
									$bdcauto->setCodelocatasl($locata->getId());
									$em->persist($bdcauto);
									$em->flush();
									$erreur = 4;
								}
								else
								{echo '3 ';	
									//Si deja locatafrs, on appelle l'existant et on fait les updates nécessaires
									$bdcauto  = $bdc;
									$erreur = 5;									
								}

									//On verifie si le bdcloc existe dejà
									$bdclocauto  = $em->getRepository('BaclooCrmBundle:Locationsfrs')		
											 ->findOneByCodelocationsl($loc->getId());
	
									//Si existe pas on le créée
									if(!isset($bdclocauto))
									{echo '4 ';	
										$bdclocauto = new Locationsfrs;
										$bdclocauto->setCodeclient($locata->getClientid());
										$bdclocauto->setFournisseurid($loc->getLoueurid());
										$bdclocauto->setFournisseur($loc->getLoueur());
										$bdclocauto->setReference('location');
										$bdclocauto->setDebutloc($loc->getDebutloc());
										$bdclocauto->setFinloc($loc->getFinloc());
										$bdclocauto->setMensuel(0);
										$bdclocauto->setDesignation($loc->getTypemachine());
										$bdclocauto->setPu(0);
										$bdclocauto->setQuantite($loc->getNbjloc());
										$bdclocauto->setMontantht(0);
										$bdclocauto->setCodelocationsl($loc->getId());
										$bdclocauto->addLocatafr($bdcauto);
										$bdcauto->addLocationsfr($bdclocauto);
										$em->persist($bdclocauto);
										$em->flush();
									}
									else
									{echo '5 ';	
										//si existe on fait un update
										$bdclocauto->setCodeclient($locata->getClientid());
										$bdclocauto->setFournisseurid($loc->getLoueurid());
										$bdclocauto->setFournisseur($loc->getLoueur());
										$bdclocauto->setReference('location');
										$bdclocauto->setDebutloc($loc->getDebutloc());
										$bdclocauto->setFinloc($loc->getFinloc());
										$bdclocauto->setMensuel(0);
										$bdclocauto->setDesignation($loc->getTypemachine());
										$bdclocauto->setPu(0);
										$bdclocauto->setQuantite(0);
										$bdclocauto->setMontantht(0);
										$bdclocauto->setCodelocationsl($loc->getId());
										$em->persist($bdclocauto);
										$em->flush();										
									}								
							
						}
					//FIN GENERATION DES BDC AUTOMATIQUES