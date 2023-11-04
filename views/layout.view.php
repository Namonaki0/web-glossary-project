<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $view_bag["title"]; ?></title>
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $view_bag["title"]; ?></a>
        </div>
    </nav>


    <!-- content here -->
    <?php require("$name.view.php"); ?>

</body>

</html>