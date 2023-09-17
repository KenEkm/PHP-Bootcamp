<?php include __DIR__."/../Layout/header.php"; ?>

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

<?php include __DIR__."/../Layout/footer.php"; ?>