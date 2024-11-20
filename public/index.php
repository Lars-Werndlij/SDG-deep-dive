<?php require_once '../config.php' ?>
<?php require_once '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="<?= $_ENV['LANGUAGE'] ?>">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG Deep Dive</title>
</head>

<body>
    <?php require_once '../resources/views/navbar.view.php' ?>
    <?php require_once getPage(); ?>
    <?php require_once '../resources/views/footer.view.php' ?>
</body>

</html>