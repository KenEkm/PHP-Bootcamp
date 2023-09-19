<?php include __DIR__."/../../Layout/header.php"; ?>

<h3>Posts verwalten</h3>

<ul>
    <?php foreach ($all AS $entry): ?>
        <li>
            <a href="posts-edit?id=<?php echo e($entry->id); ?>">
                <?php echo e($entry->title); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__."/../../Layout/footer.php"; ?>