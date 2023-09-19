<?php

//unix timestamp, also vergangene Sekunden seit 1970
echo time();
echo "<br>";

//deutsches Datumsformat mit einem Tag in Sekunden dazugerechnet
echo date("d.m.Y H:i:s", time() + (24*60*60));
echo "<br>";

//mk time zum erhalten con unix timetamp für bestimmtes datum mit zeit
$time = mktime(17, 35, 0, 11, 1, 2000);
echo $time."<br>";
echo (time()-$time) / (365 * 24 * 60 * 60); //Zeit vergangen zwischen zwei tagen
echo "<br>";


//Geburtstag aus String berechnen. Schaltjahre nicht berücksichtigt.
$geb = "01.01.1992";
$geb = explode(".", $geb);
var_dump($geb);
echo "<br>";

$gebUnix = mktime(07, 00, 0, $geb[0], $geb[1], $geb[2]);
$diff = (time()-$gebUnix) / (365 * 24 * 60 * 60);
echo $diff;
echo "<br>";

?>