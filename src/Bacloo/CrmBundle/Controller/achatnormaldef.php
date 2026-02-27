<?php

	foreach($locatafrs->getLocationsfrs() as $loca)
	{
		//Création du montant HT de la ligne
		if(null == $loca->getQuantite())
		{
			$quantite = 1;
		}
		else
		{
			$quantite = $loca->getQuantite();
		}
		if($loca->getSpeedachat() == 1)
        {echo 'speed ';
            $montantligne = $loca->getMontantht();
        }
		else
        {
            $montantligne = $loca->getPu() * $quantite;
        }

		$totalht += $montantligne;

		$client = $em->getRepository('BaclooCrmBundle:Fiche')
					->findOneById($locatafrs->getFournisseurid());					
		//On affecte chaque ligne à sa famille
		if($loca->getReference() == 'Assurances Matériels')
		{
            $assurances_materiels_lignes += $montantligne;
			$descriptionlocation[] = $loca->getDesignation();
		}
		elseif($loca->getReference() == 'Assurance RCP')
		{
            $assurance_rcp_lignes += $montantligne;
			$descriptionpiece[] = $loca->getDesignation();
		}
		elseif($loca->getReference() == 'Consommables matériels')
		{
            $consommables_materiels_lignes += $montantligne;
			$descriptiontransport[] = $loca->getDesignation();
		}
		elseif($loca->getReference() == 'Carburant')
		{
            $carburant_lignes += $montantligne;
			$descriptionmateriel[] = $loca->getDesignation();
		}
		elseif($loca->getReference() == 'Carburant d entretien')
		{
            $carburant_d_entretien_lignes += $montantligne;
			$descriptionautre[] = $loca->getDesignation();
		}
		elseif($loca->getReference() == 'Crédit bail mobilier (structure/frais généraux)')
		{//echo 'presta';
            $credit_bailmobilier_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Documentation generale')
		{//echo 'presta';
            $documentation_generale_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Dons et pourboirs')
		{//echo 'presta';
            $dons_et_pourboires_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Electricité - eau')
		{//echo 'presta';
            $electricite_eau_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Entretien matériels')
		{//echo 'presta';
            $entretien_materiels_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Entretien mat transport')
		{//echo 'presta';
            $entretien_mat_transport_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Frais bancaires')
		{//echo 'presta';
            $frais_bancaires_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Frais d actes (formalités)')
		{//echo 'presta';
            $frais_d_actes_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Frais deplacements')
		{//echo 'presta';
            $frais_de_placements_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Frais postaux')
		{//echo 'presta';
            $frais_postaux_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Fourn administratives')
		{//echo 'presta';
            $fourn_administratives_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Honoraires comptable')
		{//echo 'presta';
            $honoraires_comptable_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Honoraires juridique')
		{//echo 'presta';
            $honoraires_juridique_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Location géolocalisation')
		{//echo 'presta';
            $location_geolocalisation_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Location de matériel')
		{//echo 'presta';
            $location_de_materiel_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Maintenance informatique')
		{//echo 'presta';
            $maintenance_informatique_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Petites fournitures et outillage')
		{//echo 'presta';
            $petites_fournitures_et_outillage_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Publicite-communication')
		{//echo 'presta';
            $publicite_communication_lignes += $montantligne;
		}
		elseif($loca->getReference() == 'Telephone')
		{//echo 'presta';
            $telephone_lignes += $montantligne;
		}
		//Fin affectation ligne à sa famille

        if($loca->getSpeedachat() != 1)
        {
            $loca->setMontantht($montantligne);
        }
		$em->persist($loca);
		$montantloc = $montantligne;
//		$transportbdc = $transportlignes;
//		$assurance = $assurancelignes;
//		$contributionverte = 0;//echo 'montantloc'.$montantloc;
	}					
