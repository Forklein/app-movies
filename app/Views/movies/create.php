<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Create <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h1>Create new Movies</h1>
    </div>
    <div class="card-body">
        <form method="post" action="<?= site_url('movies') ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
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
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/movies" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>