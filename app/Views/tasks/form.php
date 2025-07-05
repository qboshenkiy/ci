<?= $this->extend("layouts/default") ?>

<?= $this->section("content") ?>
<div class="content">
    <h1>Add Task</h1>
    <?= form_open('task/task_add') ?>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="enter title...">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" placeholder="enter text..."></textarea>
    </div>
    <button type="submit">add</button>
    <?= form_close() ?>
</div>

<?= $this->endSection() ?>