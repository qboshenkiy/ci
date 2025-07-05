<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>

<div class="content">
    <h1>Task List</h1>
    <ul>
        <?php foreach ($task as $item): ?>
            <li><a href="task/<?= $item['id'] ?>"><?= $item['title'] ?></a> <?= $item['description'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->endSection() ?>