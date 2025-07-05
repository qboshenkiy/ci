<?= $this->extend("layouts/default") ?>

<?= $this->section("content") ?>

<style>
    .mg-20{
        margin: 100px;
    }
</style>
<div class="contnet">
    <h1>Task Detail</h1>

    <div class="mg-20">
        <h3><?= $detail['title'] ?></h3>
        <pre><?= $detail['description'] ?></pre>
    </div>
</div>

<?= $this->endSection() ?>