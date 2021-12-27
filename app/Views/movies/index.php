<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Index <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="row my-2">
    <div class="col-8">
        <a href="movies/new" type="button" class="btn btn-primary">Add Movie</a>
    </div>
    <div class="col-4">
        <form method="GET" action="<?php echo base_url('movies') ?>" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
    </div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $key => $movie) : ?>
            <tr class="text-center">
                <td><?= $key + 1 ?></td>
                <td><?= $movie['name'] ?></td>
                <td><?= $movie['genre'] ?></td>
                <td><?= $movie['created_at'] ?></td>
                <td>
                    <a href="#" type="button" class="btn btn-info">Show Movie</a>
                    <a href="#" type="button" class="btn btn-warning">Edit Movie</a>
                    <a href="#" type="button" class="btn btn-danger">Delete Movie</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>