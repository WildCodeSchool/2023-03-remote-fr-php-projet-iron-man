<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="form2BC.css">
    <link rel="stylesheet" href="chexboxBC.css">
    <title>Contact</title>
</head>

<body>
    <?php include __DIR__ . '/include/navbar.php' ?>
    <div class="containerform">
        <h1>Contact</h1>
        <hr>

        <form id="contactform">

            <fieldset>
                <legend>Choisssez votre Assistant :</legend>

                <div>
                    <input type="checkbox" id="scales" name="scales" checked>
                    <label for="scales">JARVIS</label>
                </div>


                <!-- DEBUT ESSAI Rounded ONE -->
                <div class="roundedOne">
                    <input type="checkbox" value="None" id="roundedOne" name="check" />
                    <label for="roundedOne"></label>
                </div>
                <!-- FIN ESSAI Rounded ONE -->

                <div>
                    <input type="checkbox" id="horns" name="horns">
                    <label for="horns">ULTRON</label>
                </div>
            </fieldset>

            <div class="personalInfo">
                <label for="firstname"></label><br>
                <input class="yellowShadow" type="text" id="firstname" name="firstname" placeholder="Prénom"><br>

                <label for="lastname"></label><br>
                <input class="yellowShadow" type="text" id="lastname" name="lastname" placeholder="Nom"><br>

                <label for="email"></label><br>
                <input class="yellowShadow" type="email" id="email" name="email" placeholder="Email"><br>

                <label for="phone"></label><br>
                <input class="yellowShadow" type="tel" id="phone" name="phone" placeholder="Téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required><br>
            </div>

            <label for="message"></label><br>
            <textarea id="message" name="message" placeholder="Tapez votre message et je le transmettrai à Mr STARK..."></textarea>
            <br>

            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
    <?php include __DIR__ . '/include/footer.php' ?>
    <script target="_blank" src="script-formBC.js"></script>
</body>

</html>