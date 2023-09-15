<?php

require("./User/User.php");
require("./Blog/PostInterface.php");
require("./Blog/Post.php");
require("./Forum/Post.php");

$post = new Blog\Post();
var_dump($post);
echo("<br>");

$post2 = new Forum\Post();
var_dump($post2);

?>