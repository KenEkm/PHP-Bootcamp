<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;

class Container
{
    public function getPdo(){
        //Verbindung zur lokalen DB mit PDO Schnittstelle aufbauen
        $pdo = new PDO(
            'mysql:host=localhost;dbname=blog;charset=utf8', 
            'blog', 
            $this->getPw()
        );
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  //um SQL-Injection zu verhindern
        return $pdo;
    }

    public function getPostsRepository(){
        return new PostsRepository($this->getPdo());
    }

    private function getPw(){
        $pass = new dbAccess;
        return $pass['pw'];
    }
}
?>