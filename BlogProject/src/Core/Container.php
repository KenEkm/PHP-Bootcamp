<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;

class Container
{
    private $recipe = [];
    private $instances = [];

    public function __construct()
    {
        $this->recipe = [
        'postsRepository' => function() {
            return new PostsRepository(
            $this->make("pdo")
            );
        },
        'pdo' => function() {
            $pdo = new PDO(
            'mysql:host=localhost;dbname=blog;charset=utf8',
            'blog',
            $this->getPw()
            );
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        }
        ];
    }

    public function make($name)
    {
        if (!empty($this->instances[$name]))
        {
        return $this->instances[$name];
        }

        if (isset($this->recipe[$name])) {
        $this->instances[$name] = $this->recipe[$name]();
        }

        return $this->instances[$name];
    }

    private function getPw(){
        $pass = new dbAccess;
        return $pass['pw'];
    }
}
?>