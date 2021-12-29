<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Show <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <?php foreach ($movie as $value) : ?>
        <div class="card-header">
            <p><strong>Name:</strong> <?= $value['name'] ?></p>
            <p><strong>Genre:</strong> <?= $value['genre'] ?></p>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> <?= $value['description'] ?></p>
        </div>
        <div class="card-footer">
            <a href="/movies" class="btn btn-primary">Back</a>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>