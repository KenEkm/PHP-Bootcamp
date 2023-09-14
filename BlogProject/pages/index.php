<?php include("../database.php"); //DB Verbindung einbinden ?>
<?php include("elements/header.php"); ?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php 
    //Funktionsaufruf für Datenabfrage mit SQL-query
    $res = fetch_posts();
?>

<ul>
    <?php foreach($res AS $row): ?>
      <!-- Verlinkung auf Post Seite mit Titel als Parameter -->
        <li>
          <a href="post.php?title=<?php echo $row["title"] ?>">
            <?php echo $row["title"]; ?>
          </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php"); ?>