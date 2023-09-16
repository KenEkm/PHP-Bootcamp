<?php
namespace App\Post;

use PDO;

class PostsRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Daten mit SQL-query abfragen
    function fetchPosts(){
        return $this->pdo->query("SELECT * FROM `posts`"); 
    }


    function fetchPost($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt
        return $stmt->fetch();

        /*  Achtung SQL-Injection Gefahr, da nicht überprft ob $id Parameter oder sql Abfrage ist
        $q = $pdo->query("SELECT * FROM `posts` WHERE id='{$id}'");
        return $q->fetch();
        */
    }

}

?>