<?php
namespace App\Post;

class PostsRepository
{

    //Daten mit SQL-query abfragen
    function fetchPosts(){
        global $pdo;
        return $pdo->query("SELECT * FROM `posts`"); 
    }


    function fetchPost($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt
        return $stmt->fetch();

        /*  Achtung SQL-Injection Gefahr, da nicht überprft ob $id Parameter oder sql Abfrage ist
        $q = $pdo->query("SELECT * FROM `posts` WHERE id='{$id}'");
        return $q->fetch();
        */
    }

}

?>