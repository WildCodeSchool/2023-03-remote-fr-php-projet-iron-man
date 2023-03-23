<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/style.css" rel="stylesheet">
    <title>Page Formation</title>
</head>

<body>
    <?php include __DIR__ . '/include/navbar.php' ?>
    <header class="formation">
        <h1>Formation</h1>
    </header>
    <main>
        <?php include __DIR__ . '/include/formation.php' ?>
        <div class="timeline_formation">
            <?php foreach ($dataFormation as $formation => $value) : ?>
                <div class="bloc">
                    <span><?php echo $value['date'] ?></span>
                    <div class="content">
                        <h3><?php echo $value['school'] ?></h3>
                        <p><?php echo $value['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include __DIR__ . '/include/footer.php' ?>
</body>

</html>