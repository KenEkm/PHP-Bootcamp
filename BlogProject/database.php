<?php
require("dbAccess.php");
//Verbindung zur lokalen DB mit PDO Schnittstelle aufbauen
$pdo = new PDO(
    'mysql:host=localhost;dbname=blog;charset=utf8', 
    'blog', 
    getPw()
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  //um SQL-Injection zu verhindern

?>