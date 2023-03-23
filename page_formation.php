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
        <div class="timeline">
            <ul>
            <?php foreach ($dataFormation as $formation => $value): ?>
                <div class="bloc_left">
                    <li>
                        <span><?php echo $value['date'] ?></span>
                        <div class="content">
                            <h3>Phillips Academy à Andover</h3>
                            <p>Bac Scientifique, option mécanique</p>
                        </div>
                    </li>
                    
                </div>    
                <div class="bloc_right">       
                    <li>
                        <span>1984 - 1987</span>
                        <div class="content">
                            <h3>Massachusetts Institute of Technology</h3>
                            <p>Major acceleré de promotion en physiques et ingénierie électrique.</p>
                        </div>
                    </li>
                </div>     
                <div class="bloc_left">
                    <li>
                        <span>2008</span>
                        <div class="content">
                            <h3>En cellule en Afghanistan</h3>
                            <p>Master en création d'un coeur synthétique</p>
                        </div>
                    </li>
                </div>    
                <div class="bloc_right">
                    <li>
                        <span>2008 - 2009</span>
                        <div class="content">
                            <h3>Gunshot - Arizona</h3>
                            <p>Formation aux techniques de tir : laser, décharge plasma,..</p>
                        </div>
                    </li>
                </div>    
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <?php include __DIR__ . '/include/footer.php' ?>  
</body>
</html>