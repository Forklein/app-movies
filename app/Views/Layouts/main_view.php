<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Movies <?= $this->renderSection('title') ?></title>
</head>

<body class="bg-secondary">
    <header>
        <nav class="navbar navbar-success bg-success">
            <a class="navbar-brand text-white p-2" href="#">
                CodeIgniter Movies
            </a>
        </nav>
    </header>
    <main>
        <div class="container mt-3">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</body>

</html>