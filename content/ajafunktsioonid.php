<?php
echo "<h1>Ajafunktsioonid</h1>";
date_default_timezone_set('Europe/Tallinn');
echo "<h4>Aeg UNIX stiilis</h4>";
echo time();

echo "<h4>Kuupäev + aeg tavastiilis</h4>";
echo date('d.m.Y G:i' , time());

echo "<br>";
echo "<h4>Kuupäev ja aeg pikas stiilis</h4>";
echo date('d.F.Y G:i' , time());

echo "<br>";
echo "<h4>Kuupäev pikas stiilis ja Eesti keeles</h4>";
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;


echo "<br>";
echo "<h4>Mingi muu täpse kuupäeva näitamine</h4>";
$minusp = mktime(0,0,0,8,16,2007);
echo date('d.m.Y', $minusp);


echo "<br>";
echo "<h2>Tehted kuupäevadega</h2>";
echo "Aeg 1min pärast: ";
echo date('d.m.Y G:i' , time()+60);			//1min pärast
echo "<br>";
echo "Aeg 1h pärast: ";
echo date('d.m.Y G:i' , time()+60*60);		//1h pärast
echo "<br>";
echo "Aeg 24h pärast: ";
echo date('d.m.Y G:i' , time()+60*60*24);	//24h pärast
