<?php

use App\Post\PostsRepository;

 include("../init.php"); //DB Verbindung und Autoloader einbinden 
 
  $postsController = $container->make("postsController");
  $postsController->show();
 
 ?>

 <?php /*
<?php include("elements/header.php"); ?>

<h1>Post.php</h1>

<!-- Zugriff auf Parameter der im Hyperlink mitgeliefert wird mit _GET als array -->
<?php
$postsRepository = $container->make("postsRepository");
$id = $_GET['id'];
$post = $postsRepository->fetchPost($id);
?>

<div class="card text-bg-dark mb-3">
  <div class="card-header">
    <h3><?php echo $post['title']; ?></h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo nl2br($post['content']); ?></p>   <!-- nl2br wendelt Zeilenumbrüche in breaks um. -->
      <footer class="blockquote-footer">Author</footer>
    </blockquote>
  </div>
</div>


<?php include("elements/footer.php"); ?>
*/?>