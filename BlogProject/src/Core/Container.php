<?php

namespace App\Core;

use PDO;
use Exception;
use PDOException;

use App\Post\PostsRepository;
use App\Post\CommentsRepository;
use App\Post\PostsController;
use App\User\LoginController;
use App\User\UsersRepository;

class Container
{
    private $recipe = [];
    private $instances = [];

    public function __construct()
    {
        $this->recipe = [
            'loginController' => function() {
                return new LoginController(
                    $this->make('usersRepository')
                );
            },
            'postsController' => function() {
                return new PostsController(
                    $this->make('postsRepository'),
                    $this->make('commentsRepository')
                );
            },
            'postsRepository' => function() {
                return new PostsRepository(
                    $this->make("pdo")
                );
            },
            'usersRepository' => function() {
                return new UsersRepository(
                    $this->make("pdo")
                );
            },
            'commentsRepository' => function() {
                return new CommentsRepository(
                    $this->make("pdo")
                );
            },
            'pdo' => function() {
                try{
                    $pdo = new PDO(
                        'mysql:host=localhost;dbname=blog;charset=utf8',
                        'blog',
                        $this->getPw()
                    );
                } catch (PDOException $e){
                    echo "Datenbankverbindung fehlgeschlagen.";
                    die();
                }
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