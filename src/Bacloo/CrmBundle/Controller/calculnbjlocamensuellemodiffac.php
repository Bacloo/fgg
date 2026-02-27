<?php

//nb jrs du mois de debutloc
$premierjour = $loca->getDebutloc();
$dernierjour = date("Y-m-t", strtotime($premierjour));
$premiermoisentier = date('Y-m-d', strtotime($dernierjour . ' +1 days'));
$date = strtotime(date('Y-m-01'));
$d15 = strtotime('+14 days',$date);//En secondes. Le 15 du mois actuel

// $nbm = (int)abs((strtotime($premierjour) - strtotime($dernierjour))/(60*60*24*30)); echo ' MMMMM '.$nbm;

$begin = new DateTime($loca->getDebutloc());
$end = new DateTime($loca->getFinloc());
$end = $end->modify( '+1 day' );

// $nbm = date_diff($begin, $end); echo ' MMMMM '; echo $nbm->m + ($nbm->y * 12) . ' months';

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$nbjloc = 0;
$nbjlocass1 = 0;

foreach ($period as $dt) {
	$newformat = $dt->format("D");								
	$nbjlocass1++;
	if($newformat == 'Sat' || $newformat == 'Sun')
	{}
	else
	{
		$nbjloc++;//echo $newformat;echo $nbjloc;
	}							
}
if($loca->getLoyermensuel()>0)
{echo 'LOYER MENSUEL';
	if($nbjloc < 20)
	{
		$loyer = $loca->getLoyermensuel()/20;
	}
	else
	{
		$nbjloc = 20;													
		$loyer = ($loca->getLoyermensuel()/20);
	}
}