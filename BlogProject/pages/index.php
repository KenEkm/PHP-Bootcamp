<?php

include("../init.php");

$postsController = $container->make("postsController");
$postsController->index();


/*
use App\Post\PostsRepository;

 include("../init.php"); //DB Verbindung und Autoloader einbinden ?>
<?php include("elements/header.php"); ?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php 

?>

<ul>
    <?php foreach($res AS $row): ?>
      <!-- Verlinkung auf Post Seite mit Titel als Parameter -->
        <li>
          <a href="post.php?id=<?php echo $row->id ?>">
            <?php echo $row->title; ?>
          </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php");

*/?>