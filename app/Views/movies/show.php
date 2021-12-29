<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Show <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <p><strong>Name:</strong> <?= $movie[0]->name ?></p>
        <p><strong>Genre:</strong> <?= $movie[0]->genre ?></p>
    </div>
    <div class="card-body">
        <p><strong>Description:</strong> <?= $movie[0]->description ?></p>
    </div>
    <div class="card-footer">
        <a href="/movies" class="btn btn-primary">Back</a>
    </div>
</div>
<?= $this->endSection() ?>