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
        $stmt = $this->pdo->query("SELECT * FROM `posts`"); 
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        return $posts;
    }


    function fetchPost($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");  //turns fetched date into object
        $post = $stmt->fetch(PDO::FETCH_CLASS);
        return $post;

        /*  Achtung SQL-Injection Gefahr, da nicht überprft ob $id Parameter oder sql Abfrage ist
        $q = $pdo->query("SELECT * FROM `posts` WHERE id='{$id}'");
        return $q->fetch();
        */
    }
}
?>