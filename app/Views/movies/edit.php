<?= $this->extend('Layouts/main_view') ?>
<?= $this->section('title') ?> Edit <?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h1>Edit Movies</h1>
    </div>
    <div class="card-body">
        <form method="post" action="<?= site_url('movies' .  '/' . $movie[0]->id) ?>">
            <input type="hidden" name="_method" value="PATCH" />
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $movie[0]->name ?>" />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value=" <?= $movie[0]->description ?>" />
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select name="genre" id="genre">
                    <option <?php if ($movie[0]->genre == 'action') echo 'selected'; ?> value="action">Action</option>
                    <option <?php if ($movie[0]->genre == 'adventure') echo 'selected'; ?> value="adventure">Adventure</option>
                    <option <?php if ($movie[0]->genre == 'comedy') echo 'selected'; ?> value="comedy">Comedy</option>
                    <option <?php if ($movie[0]->genre == 'fantasy') echo 'selected'; ?> value="fantasy">Fantasy</option>
                    <option <?php if ($movie[0]->genre == 'horror') echo 'selected'; ?> value="horror">Horror</option>
                    <option <?php if ($movie[0]->genre == 'thriller') echo 'selected'; ?> value="thriller">Thriller</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/movies" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>