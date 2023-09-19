<?php

namespace App\User;

use PDO;
use App\Core\AbstractRepository;

class UsersRepository extends AbstractRepository
{
    public function getModelName()
    {
        return "App\\User\\UserModel";
    }

    public function getTableName()
    {
        return "users";
    }

    public function findByUsername($username)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE username = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$username]);   //? aus prepare Statement wird hier gefüllt
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);  //turns fetched date into object
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }
}
?>