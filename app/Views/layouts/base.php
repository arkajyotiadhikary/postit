<!doctype html>
<html>
    <head>
        <title>Postit</title>
        <link rel="icon" href="<?= base_url()?>/public/assets/favicon.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url() ?>/public/assets/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <?= $this->renderSection('body') ?>
        <script src="<?= base_url() ?>/public/assets/index.js"></script>
    </body>
</html>
