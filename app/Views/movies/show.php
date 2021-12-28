<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Show <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <?php foreach ($movie as $value) : ?>
            <p><strong>Name:</strong> <?= $value['name'] ?></p>
            <p><strong>Genre:</strong> <?= $value['genre'] ?></p>
        <?php endforeach; ?>
    </div>
    <div class="card-body">
        <p><strong>Description:</strong> <?= $value['description'] ?></p>
    </div>
    <div class="card-footer">
        <a href="/movies" class="btn btn-primary">Back</a>
    </div>
</div>
<?= $this->endSection() ?>