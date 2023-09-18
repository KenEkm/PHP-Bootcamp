<?php include __DIR__."/../Layout/header.php"; ?>

<div class="card text-bg-dark mb-3">
  <div class="card-header">
    <h3><?php echo e($post['title']); ?></h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo nl2br(e($post['content'])); ?></p>   <!-- nl2br wendelt Zeilenumbrüche in breaks um. -->
      <footer class="blockquote-footer">Author</footer>
    </blockquote>
  </div>
</div>

<br>

<ul class="list-group">
  <?php foreach($comments AS $comment): ?>
    <li class="list-group-item">
      <!-- e() use htmlentities to prevent XSS, converts all special characters -->
      <?php echo e($comment->content); ?>
    </li>
  <?php endforeach; ?>
</ul>

<br>

<form method="post" action="post?id=<?php echo e($post['id']); ?>">

  <div class="mb-3">
    <label for="imputKommentar" class="form-label">Kommentar</label>
    <textarea name="content" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Kommentar hinzufügen</button>
</form>

<?php include __DIR__."/../Layout/footer.php"; ?>