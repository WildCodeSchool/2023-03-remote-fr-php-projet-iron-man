<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Curriculum Vitae de Iron Man</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php include __DIR__ . '/include/navbar.php' ?>
    <main>
        <h1 id="main-css">IRON MAN</h1>
        <p id="subtitle">
            Iron Man est un film américano-canadien réalisé par Jon Favreau, sorti en 2008.<br><br>
            Il raconte les origines et les débuts du personnage éponyme issu du comics publié.
        </p>
        <section class="center">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="assets/images/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/4.jpg" alt="">
                    </div>
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
        </section>
        <section id="main-container" class="main-container center">
            <div class="main-wrapper">
                <a href="#" class="link-box">
                    <div class="main-box">
                        <h2 class="main-title">Mon portfolio</h2>
                    </div>
                </a>
                <a href="#" class="link-box">
                    <div class="main-box">
                        <h2 class="main-title">Mes expériences</h2>
                    </div>
                </a>
                <a href="#" class="link-box">
                    <div class="main-box">
                        <h2 class="main-title">Mes formations</h2>
                    </div>
                </a>
                <a href="#" class="link-box">
                    <div class="main-box">
                        <h2 class="main-title">Contactez-moi</h2>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <!-- slider JS -->
    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
    <!-- end slider JS -->
    <?php include __DIR__ . '/include/footer.php' ?>
</body>
</html>