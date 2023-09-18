<?php

namespace App\Core;

use PDO;

abstract class AbstractRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    abstract public function getTableName();
    abstract public function getModelName();

    //Daten mit SQL-query abfragen
    function all(){
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->query("SELECT * FROM `$table`"); 
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return $posts;
    }

    function find($id){
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);  //turns fetched date into object
        $post = $stmt->fetch(PDO::FETCH_CLASS);
        return $post;

        /*  Achtung SQL-Injection Gefahr, da nicht überprft ob $id Parameter oder sql Abfrage ist
        $q = $pdo->query("SELECT * FROM `posts` WHERE id='{$id}'");
        return $q->fetch();
        */
    }
}
?>