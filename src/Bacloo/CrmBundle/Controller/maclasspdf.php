<?php
namespace Bacloo\CrmBundle\Controller;

use \TCPDF;

class maclasspdf extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logoFgg.jpg';
        $this->Image($image_file, 10, 0, 45, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
//        if($this->getAliasNumPage() == 1)
//        {
            $this->SetFont('helvetica', 'B', 20);
            // Title
            $this->Cell(0, 15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
            //set margin
            $this->SetMargins(13, 31, 10, true);
//        }
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-20);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
		$html = '<span style="text-align:center;">FGG Locations SAS au capital de 1000€ - 3 Avenue Charles de Gaulle - 94 470 Boissy-Saint-Léger<br>
		RCS Créteil 933 502 247 - N°TVA FR62 933 502 247 - Site web : www.fgglocation.fr<br>
		Coordonnées de paiement : IBAN FR76 3000 4021 2400 0105 8254 005 - BIC BNPAFRPPXXX</span>';
        // Page number
        $this->writeHTMLCell(0, 0, '', '', $html, 0, 0, false, "L", true);
        // $this->Cell(0, 10, '', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(0, 10, 'Page'.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
