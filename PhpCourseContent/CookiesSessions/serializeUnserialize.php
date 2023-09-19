<?php

//Ausgabe der Daten mit serialize; einlesen in urspüngliche Datenformate mit unserialize.
//z.B. nützlich wenn man Datenstrukturen in db Speichern und wieder herstellen will.
class Test
{
  public $name = "Welt";
}

$t = new Test();

$str = 'a:2:{s:10:"schluessel";s:10:"Hallo Welt";i:0;O:4:"Test":1:{s:4:"name";s:4:"Welt";}}';

$a = unserialize($str);
var_dump($a);

/*
$a = [
  "schluessel" => "Hallo Welt",
  $t
];

echo serialize($a);
*/

 ?>
