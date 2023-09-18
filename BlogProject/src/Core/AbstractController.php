<?php

namespace App\Core;

abstract class AbstractController
{
    protected function render($view, $params){
        /* verwende Alternative extract Methode
        foreach($params AS $key => $value){
            ${$key} = $value;
        }
        */

        extract($params);
        include __DIR__."/../../Views/{$view}.php";
    }
}
?>