<?php include __DIR__."/../Layout/header.php"; ?>

<ul>
    <?php foreach($posts AS $post): ?>
      <!-- Verlinkung auf Post Seite mit Titel als Parameter -->
        <li>
          <a href="post?id=<?php echo $post->id ?>">
            <?php echo $post->title; ?>
          </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__."/../Layout/footer.php"; ?>