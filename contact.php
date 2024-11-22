<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <title>Contact</title>
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="./index.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    
    <?php
        // Include navigation bar
        include('./includes/header.php') ;    
    ?>
    <br>
    <section class="container-lg">
        <div class="row">
            <div class="col-12 col-md-5 mb-3 order-2 order-md-1 align-self-center">
                <span style="display: block; width: 30%; border: 5px solid #E74040;"></span>
                <br>
                <h3 style="font-weight: 800;"><?= $bddContentTexts['contactez_nous_titre']['content_fr'] ?? "Contactez-nous" ?> </h3>
                <p class="mt-2" style="font-size: 15px;">
                    <?= $bddContentTexts['contactez_nous_description']['content_fr'] ?? "Problems trying to resolve the conflict between 
                    the two major realms of Classical physics: 
                    <br>
                    Newtonian mechanics Problems trying to resolve the conflict between 
                    the two major realms of Classical physics: 
                    <br>
                    Newtonian mechanics Problems trying to resolve the conflict" ?>  
                </p>
                <div class="d-flex flex-column mt-2">
                    <p class="ms-2" style="font-size: 13px; color: #808080;"><?= $bddContentTexts['adresse_titre']['content_fr'] ?? "Address" ?></p>
                    <p style="margin-top: -1rem;"><strong><?= $bddContentTexts['adresse_description']['content_fr'] ?? "COTONOU BENIN" ?></strong></p>
                </div>
                <div class="d-flex flex-column mt-2">
                    <p class="ms-2" style="font-size: 13px; color: #808080;"><?= $bddContentTexts['phone_titre']['content_fr'] ?? "Phone" ?></p>
                    <p style="margin-top: -1rem;"><strong><?= $bddContentTexts['phone_content']['content_fr'] ?? "+229 99 99 99 99" ?> </strong></p>
                </div>
                <div class="d-flex flex-column mt-2">
                    <p class="ms-2" style="font-size: 13px; color: #808080;"><?= $bddContentTexts['email_titre']['content_fr'] ?? "Email" ?>:</p>
                    <p style="margin-top: -1rem;"><strong><?= $bddContentTexts['email_description']['content_fr'] ?? "itti@gmail.com" ?></strong></p>
                </div>
            </div>
            <div class="col-12 col-md-7 mb-3 order-1 order-md-2 ">
                <div class="flex-fill">
                    <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
        
    </section>
    <br>
    <section class="container-fluid p-4" style="background: #FFE0E0;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <span style="display: block; width: 15%; border: 5px solid #E74040;"></span>
            </div>
            <br>
            <h2 class="text-center" style="color: #252B42; font-weight: 700;"><?= $bddContentTexts['soupscription_titre']['content_fr'] ?? "Souscrivez pour recevoir <br> nos informations" ?></h2>
            <br>
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-4 mb-3">
                    <input type="text" class="form-control py-3" placeholder="Name" style="border: 2px solid #CD4631;">
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <input type="email" class="form-control py-3" id="floatingInput" placeholder="Email">
                </div>
            </div>
            <br>
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-4 mb-3">
                    <input type="text" class="form-control py-3" placeholder="Phone">
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <button class="btn btn-dark w-100 py-3" style="border: 1px solid white; background: #000000;"><?= $bddContentTexts['souscrire_a_un_event_bouton_texte']['content_fr'] ?? "SOUSCRIRE" ?></button>
                </div>
            </div>
        </div>
        <br><br>
    </section>
    <br><br><br>
    
    <?php
        include('./includes/footer.php');
        // include('./includes/scripts.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialiser Flatpickr
        flatpickr("#dateInput", {
            dateFormat: "d F Y",  // Format pour afficher le jour, le mois en lettres, et l'année
            defaultDate: new Date(),  // Définir la date par défaut à aujourd'hui
        });
    </script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>