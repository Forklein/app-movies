<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Create <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <?php $validation = \Config\Services::validation() ?>
    <div class="card-header">
        <h1>Create new Movies</h1>
    </div>
    <div class="card-body">
        <form method="post" action="<?= site_url('movies') ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <?php
                if ($validation->getError('name')) {
                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('name') . '</div>';
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                <?php
                if ($validation->getError('description')) {
                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('description') . '</div>';
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select name="genre" id="genre">
                    <option value="action">Action</option>
                    <option value="adventure">Adventure</option>
                    <option value="comedy">Comedy</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="horror">Horror</option>
                    <option value="thriller">Thriller</option>
                </select>
                <?php
                if ($validation->getError('gemre')) {
                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('genre') . '</div>';
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/movies" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>