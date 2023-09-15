<?php

function autoload($className)
{
    $prefix = "App";
    $dir = "../Namespaces";

    $clss = substr($className, strlen($prefix));
    $clss = str_replace("\\", "/", $clss);

    if(file_exists("{$dir}{$clss}.php")){
        require "{$dir}{$clss}.php";
    }
}
spl_autoload_register("autoload");

$post = new App\Blog\Post();
var_dump($post);
echo("<br>");

$post2 = new App\Forum\Post();
var_dump($post2);

?>