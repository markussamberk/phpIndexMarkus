<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1=100;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused:</strong> Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h2>Omistamise operaatorid:</h2> ";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv=$arv1+1
$arv1++;
echo $arv1 ."- suurendamine ühe võrra";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv=$arv1-1
$arv1--;
echo $arv1 ."- vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong>".sqrt($arv1);
echo "<h2>ArvMõistatus. Arva ära kaks arvu vahemikus 0...10</h2>";
$salaarv1=1;
$salaarv2=7;
//kirjuta matemaatilise tehtega või funktsioonidega abil 5 vihjet
echo "<ol><li>Kui esimene arv korrutada 5ga, siis tuleb
 ".($salaarv1*5)."</li>";
echo "<li>Kui teisele arvule liita 4, siis tuleb
 ".($salaarv2+4)."</li>";
echo "<li>Kui teine arv ja esimene arv korrutada, siis tuleb
 ".($salaarv1*$salaarv2)."</li>";
echo "<li>Kui esimene arv lahutada teisest arvust, siis tuleb
 ".($salaarv1-$salaarv2)."</li>";
echo "<li>Kui teisest arvust lahutada esimene arv, siis tuleb
 ".($salaarv2-$salaarv1)."</li>";
?>


<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="sss"){
        echo $_REQUEST["linn"]." on õige";
    } else{
        echo $_REQUEST["linn"]." on vale";
    }
}
