<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
</head>

<body>
    <?php require_once('view/layouts/menu.php'); ?>
    <?= $page_content; ?>
    <script src="public/Javascript/menu.js"></script>
</body>

</html>