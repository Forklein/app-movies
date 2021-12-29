<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Index <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="row my-2">
    <div class="col-8">
        <a href="<?php echo site_url('movies/new'); ?>" type="button" class="btn btn-primary">Add Movie</a>
    </div>
    <div class="col-4">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
    </div>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Created at</th>
            <th class="text-center" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $key => $movie) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $movie->name ?></td>
                <td><?= $movie->genre ?></td>
                <td><?= $movie->created_at ?></td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="<?= site_url('movies' .  '/' . $movie->id) ?>" type="button" class="btn btn-info">Show Movie</a>
                        <a href="<?= site_url('movies' . '/' . $movie->id . '/edit') ?>" type="button" class="btn btn-warning mx-2">Edit Movie</a>
                        <form class="clear" method="post" action="<?= site_url('movies' .  '/' . $movie->id) ?>">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete Movie</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    const forms = document.querySelectorAll('.clear');
    forms.forEach((form) => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const question = window.confirm('Are you sure you want to delete this movie?');
            if (question) e.target.submit();
        });
    });
</script>
<?= $this->endSection() ?>