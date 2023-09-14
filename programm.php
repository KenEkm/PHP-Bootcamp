<?php
echo "Hallo Welt!"."<br>";

$name = "Keni "."Beni";
echo $name."<br>";
var_dump($name);

//some variable functions
var_dump(empty($name));
var_dump(isset($name));
echo("<br>");

//if else
if(!empty($name)){
    echo("Name ist definiert.")."<br>";
} else {
    echo("Name ist nicht definiert.")."<br>";
}

//some string functions
echo str_replace("Beni", "Benny", $name);
echo strpos($name, "Beni")."<br>";

$i = 0;

//while loop
while($i < 5){
    echo("Hallo")."<br>";
    $i++;
}

//for loop
for($i = 0; $i < 5; $i++){
    var_dump($i);
}
echo("<br>");

//arrays
$studenten = array("joey", "chandler", "ross", 123);
$studenten[] = "monica"; //element anhängen
array_unshift($studenten, "phoebe"); //element an pos 0 hinzufügen
var_dump($studenten);
echo("<br>".$studenten[0]."<br>");
echo count($studenten)."<br>";

echo array_shift($studenten)."<br>"; //löschen & rückgabe des ersten elements
var_dump($studenten);

echo "<br>".array_pop($studenten)."<br>"; //löschen & rückgabe des letzten elements
var_dump($studenten);
echo("<br>");

//for schleife
for($i = 0; $i < count($studenten); $i++){
    echo "<li>";
    echo $studenten[$i];
    echo "</li>";
}
echo("<br>");


//for each schleife
foreach($studenten AS $x){
    echo "<li>{$x}</li>";
}
echo("<br>");

foreach($studenten AS $key => $x){
    echo "<li>{$key}: {$x}</li>";
}
echo("<br>");

//assoziative arrays
$cities = array(
    "Bretten" => 30000,
    "Karlsruhe" => 0,
    "Stuttgart" => 600000
);

$cities["München"] = 1500000;

foreach($cities AS $key => $x){
    echo "<li>{$key}: {$x}</li>";
}
echo("<br>");

//array funktionen
var_dump(isset($cities["Bretten"]));
var_dump(empty($cities["Karlsruhe"]));
unset($cities["München"]);
var_dump($cities);
echo("<br>");

//array verschachtelung
$produkte = array(
    "Obst" => array(
        "Ananas",
        "Birne",
        "Banane"
    ),
    "Gemüse" => array(
        "Blattsalat",
        "Paprika",
        "Gurke"
    )
);

echo "<ul>";
foreach($produkte AS $kategorie => $elemente){
    echo"<li>{$kategorie}<ul>";
    foreach($elemente AS $element){
        echo"<li>{$element}</li>";        
    }
    echo"</ul></li>";
}
echo "</ul>";

//array kurzschreibweise
$arrkurz = ["bsp1", "bsp2"];
var_dump($arrkurz);
echo "<br>";
?>