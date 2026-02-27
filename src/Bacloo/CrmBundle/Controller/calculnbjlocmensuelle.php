<?php
include('calculnbmois.php');//echo 'nbmois'.$nbmois;
//nb jrs du mois de debutloc
$premierjour = $loc->getDebutloc();
$premierjourperiode = date("Y-m-01", strtotime($premierjour));//dernier jour du premier mois
$dernierjour = date("Y-m-t", strtotime($premierjour));//dernier jour du premier mois
$premiermoisentier = date('Y-m-d', strtotime($dernierjour . ' +1 days'));
$dernierjourperiode = date('Y-m-t', strtotime($loc->getFinloc()));

// $nbm = (int)abs((strtotime($premierjour) - strtotime($dernierjour))/(60*60*24*30)); echo ' MMMMM '.$nbm;

$begin = new DateTime($premierjourperiode);
$end = new DateTime($dernierjour);
$end = $end->modify( '+1 day' );
//echo '$dernierjour'.$end->format('Y-m-d');exit();

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$nbjlocmois = 0;
foreach ($period as $dt) {
    $newformat = $dt->format("D");
    if($locata->getFacturersamedi()  == 1 && $newformat == 'Sat')
    {
        $nbjlocmois++;
    }
    elseif($locata->getFacturerdimanche() == 1 && $newformat == 'Sun')
    {
        $nbjlocmois++;
    }
    elseif($newformat == 'Sat' or $newformat == 'Sun')
    {}
    else
    {
        $nbjlocmois++;//echo $newformat;echo $nbjloc;
    }
}
//echo '$dernierjour'.$loc->getDebutloc();exit();
$begin = new DateTime($loc->getDebutloc());
$end = new DateTime($dernierjour );
//$end = $end->modify( '+1 day' );

// $nbm = date_diff($begin, $end); echo ' MMMMM '; echo $nbm->m + ($nbm->y * 12) . ' months';

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$nbjloc1 = 0;
$nbjlocass1 = 0;
if($nbjloc > 20)
{//echo 'nbjloc2xjm'.$nbjloc1;exit();
    foreach ($period as $dt) {
        $newformat = $dt->format("D");
        $nbjlocass1++;
        if($locata->getFacturersamedi()  == 1 && $newformat == 'Sat')
        {
//            $nbjloc1++;
        }
        elseif($locata->getFacturerdimanche() == 1 && $newformat == 'Sun')
        {
//            $nbjloc1++;
        }
        elseif($newformat == 'Sat' or $newformat == 'Sun')
        {}
        else
        {
            $nbjloc1++;//echo $newformat;echo $nbjloc;
        }
    }//echo 'nbjlocmois'.$nbjlocmois;
//echo ' NBJLOCDEB '.$nbjlocmois;
    //echo 'nbjloc11x'.$nbjloc1;
    if($nbjloc1 < 20)
    {//echo 'ic666';
        $nbjloc1 = $nbjloc1;
        $nbjloc1 = round(($nbjloc1/$nbjlocmois)*20);
    }
    else
    {//echo 'parla';
        $nbjloc1 = 20;
        $nbjlocass1 = 28;
    }
    $nbjloctot = $nbjloc1;
//echo 'nbjloc2x'.$nbjloc1;exit();
//nb jours du mois de fin loc
    $premierjourdm = date("Y-m-01", strtotime($loc->getFinloc()));//echo ' 1ERJDM'.date("Y-m-01", strtotime($loc->getFinloc()));;
    $dernierjourdm = date('Y-m-t', strtotime($loc->getFinloc()));
//    $derniermoisentier = date('Y-m-d', strtotime($dernierjourdm . ' -1 days'));//echo $derniermoisentier;

    $begin = new DateTime($premierjourdm);//echo '$premierjourdm'.$premierjourdm;
    $end = new DateTime($dernierjourdm );//echo '$dernierjourdm'.$dernierjourdm;

    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);
    $nbjlocmois = 0;
    foreach ($period as $dt) {;
        $newformat = $dt->format("D");
        if($newformat == 'Sat')
        {
//            $nbjlocmois++;
        }
        elseif($newformat == 'Sun')
        {
//            $nbjlocmois++;
        }
        elseif($newformat == 'Sun')
        {}
        else
        {
            $nbjlocmois++;
        }
    }
//    echo ' nbjlocdmz'.$nbjlocmois;exit();
    $dernierjourdm = $loc->getFinloc();
    $begin = new DateTime($premierjourdm);//echo 'premierjourdm'.$premierjourdm;
    $end = new DateTime($dernierjourdm);//echo 'dernierjourdm'.$dernierjourdm;
    $end = $end->modify( '+1 day' );

    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);
    $nbjlocdm = 0;
    $nbjlocassdm = 0;
    foreach ($period as $dt) {
        $newformat = $dt->format("D");
        $nbjlocassdm++;
        if($locata->getFacturersamedi() == 1 && $newformat == 'Sat')
        {
            $nbjlocdm++;
        }
        elseif($locata->getFacturerdimanche() == 1 && $newformat == 'Sun')
        {
            $nbjlocdm++;
        }
        elseif($newformat == 'Sat' or $newformat == 'Sun')
        {}
        else
        {
            $nbjlocdm++;
        }//echo $dt->format("d/m/Y");
    }
    $nbjlocdm = round(($nbjlocdm/$nbjlocmois)*20);
//    echo 'nbjlocdmwwwwwwwwwwwwww'.$nbjlocdm;exit();

    if($nbjlocdm < 20)
    {//echo 'iciiiiiiiiiiii';
        $nbjlocdm = $nbjlocdm;
    }
    else
    {//echo 'laaaaaaa&&&';
        $nbjlocdm = 20;
        $nbjlocassdm = 28;
    }
//nb de mois entier à 20 jours
    $debutloc = $loc->getDebutloc();
    $finloc = $loc->getFinloc();

    $timezone = 'Europe/Paris';
    $d1 = new DateTime(date("Y-m-01", strtotime($debutloc . 'first day of +1 month')), new DateTimeZone($timezone));//echo 'D1X'.date("Y-m-01", strtotime($debutloc . 'first day of +1 month'));
    $d2 = new DateTime(date('Y-m-t', strtotime($finloc)), new DateTimeZone($timezone));//echo 'D2X'.date('Y-m-t', strtotime($finloc));
    $d1x = new DateTime($debutloc, new DateTimeZone($timezone));
    $d2x = new DateTime($finloc, new DateTimeZone($timezone));
//    include('calculnbmois20.php');
//    $nbmois = $d1->diff($d2)->m + ($d1->diff($d2)->y*12)+1;//echo 'diff1x'.$d1->diff($d2)->m;//echo 'diff2x'.($d1->diff($d2)->y*12);echo 'nbmois'.$nbmois;
//$nbmois20j = abs((date('Y', $derniermoisentier) - date('Y', $premiermoisentier))*12 + (date('m', $derniermoisentier) - date('m', $premiermoisentier)));
// $numberOfMonths = abs((date('Y', $endDate) - date('Y', $startDate))*12 + (date('m', $endDate) - date('m', $startDate)))+1;
//$nbj = $nbmois20j * 20;
//echo 'nbjlocint'.$nbjloc;
//echo ' nbmois20j'.$nbmois20j;echo 'x';
//Total jours
    if($nbjloc >= 58)
    {//echo 'XXXXXXXXXXX>3';echo 'nbjloc1x'.$nbjloc1;echo 'nbjlocdm'.$nbjlocdm;
        $nbmois20j = $d1x->diff($d2x)->m + ($d1x->diff($d2x)->y*12);
        $nbj = ($nbmois-2) * 20;
        if($nbjlocdm >= 20)
        {
            $nbjlocpas20 = $nbjloc1;
            $nbjloc = $nbjloc1+$nbjlocdm + $nbj;
            $nbjass = $nbmois20j * 28;
            $nbjlocass = $nbjlocass1 + $nbjass + $nbjlocassdm;
        }
        else
        {
            $nbjlocpas20 = $nbjloc1+$nbjlocdm;
            $nbjloc = $nbjlocpas20 + $nbj;
            $nbjass = $nbmois20j * 28;
            $nbjlocass = $nbjlocass1 + $nbjass + $nbjlocassdm;
        }//echo 'nbjlocpas20x'.$nbjlocpas20;
        //echo 'nbjloc'.$nbjloc;exit();
    }
    elseif($nbjloc > 31 && $nbjloc < 40)
    {//echo '222222222222';echo 'nbjloc1'.$nbjloc1;echo 'nbjlocdm'.$nbjlocdm;
        $nbmois20j = $d1x->diff($d2x)->m + ($d1x->diff($d2x)->y*12);//echo 'diff'.$d1x->diff($d2x)->m.'<br>';echo 'nbmois20j'.$nbmois20j;
        $nbj = $nbmois20j * 20;//echo 'nbjxx'.$nbj;
        if($nbmois >= 2)
        {
            if($nbjloc1+$nbjlocdm > 20){$nbjlocpas20 = $nbjloc1+$nbjlocdm;}else{$nbjlocpas20 = 20;}
            if($nbjlocpas20 >= 38){$nbjloc = 40;}else{$nbjloc = $nbjlocpas20 + $nbj;} //echo '$nbjlocpas20'.$nbjlocpas20;
//		if($nbjlocpas20 >= 38){$nbjloc = 40;}else{$nbjloc = $nbjlocpas20 + $nbj;} //echo 'nbmois'.$nbjloc;
            $nbjass = $nbmois20j * 28;
            $nbjlocass = $nbjlocass1 + $nbjass + $nbjlocassdm;
        }
        else
        {
            if($nbjloc1+$nbjlocdm >= 20){$nbjlocpas20 = 20;}else{$nbjlocpas20 = $nbjloc1+$nbjlocdm;}
            $nbjloc = $nbjlocpas20;
            $nbjass = $nbmois20j * 28;
            $nbjlocass = $nbjlocass1 + $nbjlocassdm;
        }
    }
    elseif(($nbjloc > 31 && $nbjloc < 58) or ($nbmois == 2 and $nbjloc > 1))
    {//echo 'x33333333333x';echo 'nbjloc13x'.$nbjloc1;echo 'nbjlocdm'.$nbjlocdm;echo 'nbmois'.$nbmois;
        if($nbmois > 2)
        {
            $nbmois20j = $d1->diff($d2)->m + ($d1->diff($d2)->y*12);
        }
        else
        {
            $nbmois20j = 0;
        }
        $nbj = $nbmois20j * 20;//echo 'nbjyy'.$nbj;
        if($nbjloc1 >= 20){$nbjloc1 = 20;}
        if($nbjlocdm >= 20){$nbjlocdm = 20;}
        if($nbjloc1+$nbjlocdm >= 20){$nbjlocpas20 = $nbjloc1+$nbjlocdm;}else{$nbjlocpas20 = $nbjloc1+$nbjlocdm;}
        $nbjloc = $nbjlocpas20 + $nbj;

        $nbjass = $nbmois20j * 28;
        $nbjlocass = $nbjlocass1 + $nbjass + $nbjlocassdm;
        if($nbjloc <= 31 && $nbmois > 1)
        {//echo 'uuuuuu';

        }
        elseif($nbjloc <= 31 && $nbmois == 1)
        {//echo 'ffffff';
            $nbjloc = 20;
            $nbjass = 28;
        }//echo 'nbjloc1x'.$nbjloc1;echo '$nbmois20j'.$nbmois20j;echo 'nbjlocdm'.$nbjlocdm;echo 'nbjlocdm'.$nbjlocpas20;echo 'nbjloooooc'.$nbjloc;exit();
    }
    else
    {//echo '11111111111';echo 'nbjloc1'.$nbjloc1;echo 'nbjlocdm'.$nbjlocdm;echo '$nbmois'.$nbmois;exit();
        if($nbmois == 0 and $nbjloc <= 31 )
        {//echo 'ici';
            $nbjloc = $nbjloc1;
            $nbjlocass = $nbjlocass1 ;
        }
        else
        {//echo 'laaa'.$nbmois;
            if($nbmois == 1)
            {
                $nbjloc = $nbjloc1;
            }
            elseif($nbmois == 2)
            {
                $nbjloc = $nbjloc1 + $nbjlocdm;
            }
            else
            {
                $nbmois20j = $d1x->diff($d2x)->m + ($d1x->diff($d2x)->y*12);//echo 'ttt'.$nbmois20j;exit();
                $nbjloc = $nbjloc1 + ($nbmois20j*20) + $nbjlocdm;//echo 'xxxxx'.$nbjloc1;exit();
            }
            $nbjlocass = $nbjlocass1 ;
        }
//	$nbjloc = 20;
//	$nbjlocass = 28;
    }
}//echo 'nbjloooooc'.$nbjloc;
//echo 'uuuu';exit();