<?php
require("dbAccess.php");
//Verbindung zur lokalen DB mit PDO Schnittstelle aufbauen
$pdo = new PDO(
    'mysql:host=localhost;dbname=blog;charset=utf8', 
    'blog', 
    getPw()
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  //um SQL-Injection zu verhindern

//Daten mit SQL-query abfragen
function fetch_posts(){
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`"); 
}


function fetch_post($id){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = ?"); //prepare Statements gegen SQL-Inj
    $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt
    return $stmt->fetch();

    /*  Achtung SQL-Injection Gefahr, da nicht überprft ob $id Parameter oder sql Abfrage ist
    $q = $pdo->query("SELECT * FROM `posts` WHERE id='{$id}'");
    return $q->fetch();
    */
}
?>