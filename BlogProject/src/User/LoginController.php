<?php

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function login()
    {
        $error = null;
        if(!empty($_POST['username']) AND !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->usersRepository->findByUsername($username);
            
            if(!empty($user)){
                if($user->password == $password){
                    echo "Login war erfolgreich";
                    die();
                } else {
                    $error = "Falsches Passwort.";
                }

            } else {
                $error = "Der Nutzer konnte nicht gefunden werden.";
            }
        }
        $this->render("User/login", [
            'error' => $error
        ]);
    }
}
?>