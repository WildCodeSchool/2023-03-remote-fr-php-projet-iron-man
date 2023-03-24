<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--<link rel="stylesheet" href="/assets/css/formBC.css">-->
    <link rel="stylesheet" href="/assets/css/styleUltron.css">
    <title>Contact</title>
</head>

<body>
    <?php include __DIR__ . '/include/navbar.php' ?>
    <div class="containerform">
        <h1>Contact</h1>

        <div class="Ultron">
            <input type="checkbox" value="1" onclick="document.location.href='formBC.php'" id="Ultron" name="Ultron" />
            <label for="Ultron"></label>
        </div>
        <!--<p class="assistantIA">Jarvis</p>-->

        <span class="redline"></span>
        <!--<p>Entrez vos coordonnées ci-dessous !</p>-->

        <form id="contactform">

            <div class="personalInfo">
                <label for="firstname"></label><br>
                <input class="yellowShadow" type="text" id="firstname" name="firstname" placeholder="Prénom" required><br>

                <label for="lastname"></label><br>
                <input class="yellowShadow" type="text" id="lastname" name="lastname" placeholder="Nom" required><br>

                <label for="email"></label><br>
                <input class="yellowShadow" type="email" id="email" name="email" placeholder="Email" required><br>

                <label for="phone"></label><br>
                <input class="yellowShadow" type="tel" id="phone" name="phone" placeholder="Téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required><br>
            </div>

            <label for="message"></label><br>
            <textarea id="message" name="message" placeholder="Tapez votre message si vous voulez mais ne comptez pas sur moi pour le transmettre à cet Iron Man..." required></textarea>
            <br>

            <input type="submit" value="Envoyer" id="submit">

        </form>
    </div>
    <?php include __DIR__ . '/include/footer.php' ?>
    <script target="_blank" src="script-formBC.js"></script>
</body>

</html>