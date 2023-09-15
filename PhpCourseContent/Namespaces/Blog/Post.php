<?php

namespace Blog; //Namespace wie Ordner, verhindert gleiche Klassenbezeichnungen in versch Ordnern
use User\User;  //Anderen Namespace & Klasse einbinden um diese zu verwenden

class Post implements PostInterface
{
    public $title;

    public $user;

    public function __construct()
    {
        $this->user = new User();
    }
}

?>