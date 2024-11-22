<?php
    require('./config/database.php');

    // Exécution de la requête SQL
    $sql = "SELECT * FROM content_text_management";
    $stmt = $pdo->query($sql);

    // Récupération des résultats
    $bddContentTexts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Exécution de la requête SQL
    $sql = "SELECT * FROM content_text_management";
    $stmt = $pdo->query($sql);

    // Récupération des résultats et organisation dans un tableau associatif avec le 'name' comme clé
    $bddContentTexts = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $bddContentTexts[$row['name']] = $row;
    }

    // Exécution de la requête SQL pour récupérer les images
    $sql2 = "SELECT * FROM content_image_management";
    $stmt2 = $pdo->query($sql2);

    // Récupération des résultats et organisation dans un tableau associatif avec le 'name' comme clé
    $bddContentImages = [];
    while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        $bddContentImages[$row['name']] = $row;
    }
?>
<section class="container-fluid p-3">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-lg">
                <!-- Logo Section -->
                <a class="navbar-brand" href="#">
                    <img src="image/image_2024_11_20T09_52_44_168Z-removebg-preview.png" alt="" class="img-fluid log">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <!-- Links Section -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700;" href="index.php">
                                <?= $bddContentTexts['nav_link_1']['content_fr'] ?? "Acceuil" ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700;" href="index.php#section2">
                                <?= $bddContentTexts['nav_link_2']['content_fr'] ?? "A propos" ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700;" href="facilities.php">
                                <?= $bddContentTexts['nav_link_3']['content_fr'] ?? "Facilities" ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 700;" href="index.php#section3">
                                <?= $bddContentTexts['nav_link_4']['content_fr'] ?? "Programmes" ?>
                        </a>
                        </li>
                    </ul>
                    <div class="d-lg-none">
                        <div class="d-flex">
                            <button class="btn btn-white px-3 text-white" style="background: #96BB7C; border-radius: 0;"
                                onclick="window.location.href='contact.php'">NOUS CONTACTER <i
                                    class="bi bi-arrow-right-short ms-4"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Login Section -->
                <div class="d-none d-lg-block">
                    <div class="d-flex">
                        <button class="btn btn-white px-3 text-white" style="background: #96BB7C; border-radius: 0;"
                            onclick="window.location.href='contact.php'">
                                <?= $bddContentTexts['nav_link_5']['content_fr'] ?? "JOIN US" ?>
                             <i
                                class="bi bi-arrow-right-short ms-4"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </section>