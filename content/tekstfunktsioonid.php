<?php
echo "<h1>Tekstfunktsioonid</h1>";
// the quick brown fox jumps over the lazy dog
$tekst = 'The Quick Brown Fox Jumps Over the Lazy Dog';
echo "<h4>Väiksed tähed</h4>";
echo strtolower($tekst);

echo '<br>';
echo "<h4>Suured tähed</h4>";
echo strtoupper($tekst);

echo "<h4>Esimene täht suur</h4>";
echo ucfirst(strtolower($tekst));

echo "<h4>Mitu märki on tekstis?</h4>";
echo strlen($tekst);			//34
echo '<br>';
echo "<h4>Mitu sõna on tekstis?</h4>";
echo str_word_count($tekst);

echo "<h2>MÕISTATUS – ARVA ÄRA EESTI LINNANIMI</h2>";
/* eesmärk on ära arvata, millist Eesti linna on kirjeldatud.
// Kirjuta abiks 5–6 tekstipõhist funktsiooni” ehk vihjet,
// mis aitavad samm-sammult lähemale jõuda õigele linnanimele.
// funktsioonid on näiteks selliseid - esimene täht on .. jne*/

$linn="Tallinn";
echo "Vihjed:";
echo "<ol><li>Linn algab ".substr($linn, 0,1)." tähega</li>";
echo "<li>Linn lõpeb ".substr($linn, strlen($linn)-1,1)." tähega</li>";
