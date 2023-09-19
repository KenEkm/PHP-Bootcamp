<?php include __DIR__."/../../Layout/header.php"; ?>

<h3>Post bearbeiten</h3>

<?php if(!empty($savedSuccess)): ?>
  <p>Der Post wurde erfolgreich gespeichert</p>
<?php endif; ?>


<form method="POST" action="posts-edit?id=<?php echo e($entry->id); ?>" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-md-3">
        <br>
      Titel:
    </label>
    <div class="col-md-9">
      <input type="text" name="title" value="<?php echo e($entry->title); ?>" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">
        <br>
      Inhalt:
    </label>
    <div class="col-md-9">
      <textarea name="content" class="form-control" rows="10"><?php echo e($entry->content); ?></textarea>
    </div>
  </div>

  <br>

  <input type="submit" value="Post speichern!" class="btn btn-primary" />
</form>

<?php include __DIR__."/../../Layout/footer.php"; ?>