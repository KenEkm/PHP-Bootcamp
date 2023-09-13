<?php
echo "Hallo Welt! <br>";

$name = "Keni "."Beni";
echo $name."<br>";
var_dump($name);

//some variable functions
var_dump(empty($name));
var_dump(isset($name));

echo("<br>");

//if else
if(!empty($name)){
    echo("Name ist definiert.");
} else {
    echo("Name ist nicht definiert.");
}
echo("<br>");

//some string functions
echo str_replace("Beni", "Benny", $name);
echo strpos($name, "Beni");

echo("<br>");

$i = 0;

//while loop
while($i < 5){
    echo("Hallo <br>");
    $i++;
}

//for loop
for($i = 0; $i < 5; $i++){
    var_dump($i);
}

?>