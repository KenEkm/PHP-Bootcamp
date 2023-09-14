<?php

//require "src/Auto.php";   unpraktisch bei sehr vielen Klassen. Besser -> autoload
//require "src/SportWagen.php";

function autoload($className)   //lädt Klasse sobald benötigt.
{
    if(file_exists("./src/{$className}.php")){
        require"./src/{$className}.php";
    }
}
spl_autoload_register("autoload");

//parameter ist objekt einer klasse, welches das Interface implementiert
function fahre(DriveInterface $obj){
    return $obj->fahre("Ulm");
}

$porsche = new Auto(300);
$porsche->setPs(350);
echo $porsche->getPs()."<br>"; 
echo $porsche->fahre("Bretten");
echo"<br>";

$bmw = new Auto(200);
echo $bmw->fahre("Stuttgart");
echo"<br>";

$pagani = new SportWagen(200);
echo $pagani->fahre("Karlsruhe");
echo"<br>";

$audi = new Fahrrad();
echo fahre($audi);

?>