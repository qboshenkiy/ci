<?= $this->extend("layouts/default") ?>

<?= $this->section("content") ?>
<!-- <h1><?= $task['title'] ?></h1>
<div><?= $task['body'] ?></div> -->

<div class="content">
    <!-- <?php if (!empty($task) && is_array($task)): ?>
        <ul>
            <?php foreach ($task as $item): ?>
                <li><a href="<?= 'task/' . $item['slug'] ?>"><?= $item['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h3>No task</h3>
        <p>Unable to find any task for you.</p>
    <?php endif; ?> -->
</div>
<?= $this->endSection() ?>