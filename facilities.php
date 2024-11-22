<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        // Include navigation bar
        include('./includes/head.php') ;    
    ?>
    <title>Facilities</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./facilities.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>

    <?php
        // Include navigation bar
        include('./includes/header.php') ;    
    ?>
    
    <div class="hero" style="background-image: url(./image/<?= $bddContentImages['facilities_banner_image']['path'] ?? "man.jpg" ?>) !important">
        <div class="desc2">
            <h2>
            <?= $bddContentTexts['facilities_premier_titre']['content_fr'] ?? "Decouvrez nos activites" ?></h2>
        </div>
    </div>


    <div class="row nax container-fluid">
    <?php
// Exemple d'événements

$stmt = $pdo->query("SELECT * FROM activities LIMIT 5");
$activities = $stmt->fetchAll(PDO::FETCH_ASSOC);

$useReverse = false; // Variable pour alterner les classes

foreach ($activities as $activity) {
    // Détermine la classe à utiliser
    $rowClass = $useReverse ? 'row flex-row-reverse' : 'row';
    ?>
        <section class="">
            <div class="<?= $rowClass ?>">
                <div class="col-12 col-md-7 mb-3 mb-md-0 mx-auto order-2 order-md-1 p-5 align-self-center">
                    <div class="d-flex">
                        <div class="align-self-center">
                            <span class="me-3 mb-3" style="display: block; border-bottom: 2px solid black; width: 4rem;"></span>
                        </div>
                        <div>
                            <p><?= $activity['little_title'] ?? "" ?></p>
                        </div>
                    </div>
                    <br>
                    <div class="ms-0 ms-md-5 ps-0 ps-md-4">
                        <h1 class="" style="font-weight: 800;"><?= $activity['name'] ?? "" ?></h1>
                        <br>
                        <p>
                            <?= $activity['description'] ?? "" ?>
                        </p>
                    </div>
                    
                </div>
                <div class="col-12 col-md-5 mb-3 order-1 order-md-2 align-items-stretch" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="flex-fill">
                        <img src="image/<?= $activity['image'] ?? 'woman-working-with-personal-trainer.jpg' ?>" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <br>
    <?php
    // Alterner la variable
    $useReverse = !$useReverse;
}
?>
    
    </div>


    <br>
    <section class="container-fluid p-4" style="background: #FFE0E0; height: 100vh;">
        <div class="container thiis">
            <div class="d-flex justify-content-center">
                <span style="display: block; width: 15%; border: 5px solid #E74040;"></span>
            </div>
            <br>
            <h2 class="text-center" style="color: #252B42; font-weight: 700;"><?= $bddContentTexts['facilities_space_renting_titre']['content_fr'] ?? "Space renting" ?></a> </h2>
            <br>

            <div class="row list">
                <div class="scroll-container">
                        <?php                            
                            $stmt = $pdo->query("SELECT * FROM spaces LIMIT 5");
                            $spaces = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($spaces as $space) {
                        ?>
                        <div class="scroll-item">
                            <div class="image-container">
                                <img src="image/<?= $space['images'] ?? '[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg' ?>"
                                    alt="" class="img-fluid w-100">
                                <div class="overlay">
                                    <h2><?= $space['name']?></h2>
                                    <p class="description"><?= $space['amount']?></p>
                                </div>
                            </div>
                        </div>
                            <br> <br>
                        <?php

                            }
                            if (empty($activities)) {
                                ?>

                                <a class="mt-3" href="#" style="color: #737373; text-decoration: none; font-weight: 600; font-size: 16px;">
                                    No Activity yet
                                </a>
                                <br> <br>
                            <?php
                            }
                        ?>    
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <br>
    <section class="container-fluid p-4" style="background: #FFE0E0;">

        
    </section>



    <br><br><br>
    
    <?php
        include('./includes/footer.php');
        // include('./includes/scripts.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="jquery.min.js"></script>

    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Script pour afficher automatiquement le toast -->
    <script>
        const myToast = document.getElementById('myToast');
        const toast = new bootstrap.Toast(myToast);
        toast.show();
    </script>
    <script>
        const swiper = new Swiper('.slider-wrapper', {
            loop: true,
            grabCursor: true,
            spaceBetween: 30,
            // Pagination bullets
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Responsive breakpoints
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
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