<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>


<body class="bodyportfolio">   
    <?php include __DIR__ . '/include/navbar.php' ?>
    <div class="slider-container">
        <div class="menu">
            <label for="slide-dot-1"></label>
            <label for="slide-dot-2"></label>
            <label for="slide-dot-3"></label>
            <label for="slide-dot-4"></label>
            <label for="slide-dot-5"></label>
        </div>

        <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
        <div class="slide-content">
            <img class="slide-img" src="/assets/images/warmachine-markvii.jpg">
        <p class="slide-text">War Machine Mark VII/Mark 7</p>
        </div>
        

        <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
        <div class="slide-content">
            <img class="slide-img" src="/assets/images/warmachine-markvi.jpg">
        <p class="slide-text">War Machine Mark VI/Mark 6</p>
        </div>

        <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
        <div class="slide-content">
            <img class="slide-img" src="/assets/images/ironpatriot-2.jpg">
        <p class="slide-text">Iron Patriot</p>
        </div>

        <input class="slide-input" id="slide-dot-4" type="radio" name="slides">
        <div class="slide-content">
        <img class="slide-img" src="/assets/images/rescuearmor.jpg">
        <p class="slide-text">Mark XLIX/Mark 49</p>
        </div>

        <input class="slide-input" id="slide-dot-5" type="radio" name="slides">
        <div class="slide-content">
        <img class="slide-img" src="/assets/images/markxlvi.jpg">
        <p class="slide-text">Mark XLVII/Mark 47</p>
        </div>
    </div>
    <?php include __DIR__ . '/include/footer.php' ?>  
</body>
</html>