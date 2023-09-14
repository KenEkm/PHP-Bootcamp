<?php

function autoload($className)
{
    if(file_exists("./src/{$className}.php")){
        require"./src/{$className}.php";
    }
}
spl_autoload_register("autoload");

//Verbindung zur lokalen DB mit PDO Schnittstelle aufbauen
$pdo = new PDO(
    'mysql:host=localhost;
    dbname=blog', 
    'root', 
    ''
);

$res = $pdo->query("SELECT * FROM `posts`");
foreach($res AS $row){
    var_dump($row);
}

?>