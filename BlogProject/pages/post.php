<?php include("../database.php"); //DB Verbindung einbinden ?>
<?php include("elements/header.php"); ?>

<h1>Post.php</h1>

<!-- Ausgabe des Parameters der im Hyperlink mitgeliefert wird -->
<?php
$title = $_GET['title'];
$post = fetch_post($title);
var_dump($post);
?>

<div class="card text-bg-dark mb-3">
  <div class="card-header">
    <h3><?php echo $post["title"]; ?></h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo $post["content"]; ?></p>
      <footer class="blockquote-footer">Author</footer>
    </blockquote>
  </div>
</div>


<?php include("elements/footer.php"); ?>