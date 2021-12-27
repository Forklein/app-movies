<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Create Movies</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Create new Movies</h1>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description">
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
                </form>
            </div>
        </div>
    </div>
</body>

</html>