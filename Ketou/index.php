<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Include navigation bar
        include('./includes/head.php') ;    
    ?>    
</head>
<body>
    
<?php
    
    // Inclure le fichier PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';  // Si tu utilises Composer
    
    $mail = new PHPMailer(true);  // Créer une instance de PHPMailer

    if (!empty($_POST)  && isset($_POST['btn_contact'])) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // name-email-subject-phone-message
            // var_dump($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = "No subject"; //$_POST['subject'];
            $phone = $_POST['phone'];

            // Validation des données
            if ($name == "" || $email == "" || $subject == "" || $phone == "") {
                // echo "Tous les champs sont requis.";
                $_SESSION['error'] =  "Tous les champs sont requis.";
                // exit;
            }
                    
            // Vérifiez que le champ contient uniquement des chiffres ou un "+"
            if (preg_match('/^\+?[0-9]*$/', $phone)) {
                 $_SESSION['error'] = "Numéro de téléphone valide : " . htmlspecialchars($phone);
            }
            $message = "Nom: $name; Email: $email;Subject: $subject;Phone: $phone";
            // $pdo = Database::getConnection();
            

            // Préparation de la requête SQL pour insérer les données
            // name	email	subject	phone	message	created_at	

            $sql = "INSERT INTO contact_email (name,email,subject,phone) VALUES (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            // var_dump($stmt->execute(array($name,$email,$subject,$phone,$message)));
            // die();
            $stmt->execute(array($name,$email,$subject,$phone));
            // /*
                try {
                    // Configuration du serveur SMTP de Gmail
                    $mail->isSMTP();                                             // Utiliser SMTP
                    $mail->Host       = 'smtp.googlemail.com';                        // Serveur SMTP de Gmail
                    $mail->SMTPAuth   = true;                                    // Activer l'authentification SMTP
                    $mail->Username   = 'degittiq229@gmail.com';               // Ton adresse Gmail
                    $mail->Password   = 'uyflekniwkslkuwi';                    // Ton mot de passe Gmail ou mot de passe d'application (voir plus bas)
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Activer TLS
                    $mail->Port       = 587;                                     // Port SMTP pour TLS
                
                    // Destinataires
                    $mail->setFrom('degittiq229@gmail.com', 'CSL-KETOU');
                    $mail->addAddress('destinataire@exemple.com', 'Nom du destinataire'); // Ajouter un destinataire
                
                    // Contenu de l'email
                    $mail->isHTML(true);                                  // Définit l'email comme au format HTML
                    $mail->Subject = 'Contact Mail from CSL-KETOU';
                    $mail->Body    = $message;
                    $mail->AltBody = 'Ceci est le corps du message en texte brut pour les clients mail qui n\'acceptent pas le HTML';
                
                    $mail->send();
                    // echo 'Le message a été envoyé avec succès';
                    $_SESSION['success'] = "Votre message a été envoyé avec succès.";
                } catch (Exception $e) {
                    // echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
                    $_SESSION['error'] = "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
                }
            // */

        }
    }
?>
    <section class="container-fluid">
        <?php
            // Include navigation bar
            include('./includes/navbar.php') ;    
        ?>
    </section>
    <section class="container-fluid" id="section1" style="padding-left: 0px; padding-right: 0px;">
        <div id="customCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/2.png" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="Slide 3">
                </div>
            </div>
        
            <!-- Navigation Buttons -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active custom-indicator" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" class="custom-indicator" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" class="custom-indicator" aria-label="Slide 3"></button>
            </div>

            <div class="pos">
                <p><strong style="color: #61BC45;">Welcome to CSL Arojú Owò </strong></p>
                <h1 class="text-white" style="font-weight: 900;">
                    The Heart of <br>
                    Sports & Leisure!
                </h1>
                <p class="text-white">Explore a world of fitness, fun, and <br> community activities tailored for all ages.</p>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mb-3 mb-md-0 mx-auto">
                        <div>
                            <button class="btn px-3 text-white" style="background: #61BC45; text-transform: uppercase; white-space: nowrap;">
                                Explore Activities <i class="bi bi-arrow-right-circle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3 mb-md-0 mx-auto">
                        <div>
                            <button class="btn px-3 text-white" style="background: #61BC45; text-transform: uppercase; white-space: nowrap;">
                            Become A Member <i class="bi bi-arrow-right-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-lg my-4" id="section3">
        <div class="row">
            <div class="col-12 col-md-4 mx-auto mb-3">
                <h2 class="text-center fw-bold" style="text-transform: uppercase;">What We Offer</h2>
            </div>
            <div class="col-md-6"></div>
            <div class="col-12 col-md-2 mx-auto mb-3">
                <div class="">
                    <button class="btn btn-white px-3 text-white" style="background: #61BC45;" onclick="window.location.href='what.php'">View all   <i class="bi bi-arrow-right-circle"></i></button>
                </div>
            </div>
        </div>
        <div id="customCarousel1" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/3.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 8.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Football</h2>
                                <p class="mt-3 text-center">Join our leagues and <br> tournaments</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/4.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 2.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Dance & Fitness</h2>
                                <p class="mt-3 text-center">Stay active with our <br>
                                    vibrant classes</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/5.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 3.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Cultural Events</h2>
                                <p class="mt-3 text-center">Celebrate tradition and unity</p>
                                <div class="mt-5">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/3.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 8.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Football</h2>
                                <p class="mt-3 text-center">Join our leagues and <br> tournaments</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/4.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 2.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Dance & Fitness</h2>
                                <p class="mt-3 text-center">Stay active with our <br>
                                    vibrant classes</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/5.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 3.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Cultural Events</h2>
                                <p class="mt-3 text-center">Celebrate tradition and unity</p>
                                <div class="mt-5">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/3.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 8.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Football</h2>
                                <p class="mt-3 text-center">Join our leagues and <br> tournaments</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/4.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 2.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Dance & Fitness</h2>
                                <p class="mt-3 text-center">Stay active with our <br>
                                    vibrant classes</p>
                                <div class="mt-3">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto mb-3">
                            <div class="relative">
                                <img src="images/5.png" alt="" class="image-fluid w-100" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="ppos d-none d-lg-block">
                                    <img src="images/Group 3.png" alt="" class="image-fluid" style="width: 90%;">
                                </div>
                            </div>
                            <div class="p-2" style="background-color: #F2F2F2; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <h2 class="mt-5 text-center fw-bold">Cultural Events</h2>
                                <p class="mt-3 text-center">Celebrate tradition and unity</p>
                                <div class="mt-5">
                                    <button class="btn btn-white w-100 py-2" style="background: #FFFFFF;">
                                        Learn More 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Navigation Buttons -->
            <div class="carousel-indicator2">
                <button type="button" data-bs-target="#customCarousel1" data-bs-slide-to="0" class="indicator2 active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#customCarousel1" data-bs-slide-to="1" class="indicator2"  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#customCarousel1" data-bs-slide-to="2" class="indicator2"  aria-label="Slide 3"></button>
            </div>
        </div>
        
    </section>
    <section class="mb-4 container-fluid p-4" id="section5" style="background-color: #F2F2F2;">
        <div class="container-lg">
            <div class="row mt-3">
                <div class="col-12 col-md-4 mx-auto mb-3">
                    <h2 class="text-center fw-bold" style="text-transform: uppercase; white-space: nowrap;">Upcoming Events</h2>
                </div>
                <div class="col-md-6"></div>
                <div class="col-12 col-md-2 mx-auto mb-3">
                    <div class="">
                        <button class="btn btn-white px-3 text-white" style="background: #61BC45;" onclick="window.location.href='event.php'">View all   <i class="bi bi-arrow-right-circle"></i></button>
                    </div>
                </div>
            </div>
            <div id="customCarousel2" class="carousel slide position-relative" data-bs-ride="carousel">
                <!-- Boutons de navigation gauche et droite -->
                <button class="pop carousel-control-prev" type="button" data-bs-target="#customCarousel2" data-bs-slide="prev">
                    <i class="bi bi-chevron-compact-left"></i>
                </button>
                <button class="pop1 carousel-control-next" type="button" data-bs-target="#customCarousel2" data-bs-slide="next">
                    <i class="bi bi-chevron-compact-right"></i>
                </button>
            
                <!-- Contenu du carousel -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row mt-4">
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Ajoutez d'autres slides ici (Slide 2, Slide 3...) -->
                    <div class="carousel-item">
                        <div class="row mt-4">
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto mb-4">
                                <div class="p-3 bg-white" style="border: 1px solid #4A4A4A; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-5 mx-auto align-self-center">
                                            <img src="images/6.png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-7 mx-auto">
                                            <p class="fw-bold">Lorem ipsum n dolor sit</p>
                                            <p class="mt-3">
                                                Quisque commodo felis diam, eu viverra ipsum varius
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-end me-4"><i class="bi bi-arrow-right-circle fs-3"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section class="container-lg mb-5" id="section4">
        <div class="row">
            <div class="col-12 col-md-6 mb-4 mb-md-0 mx-auto">
                <img src="images/7.png" alt="" class="w-100 image-fluid">
            </div>
            <div class="col-12 col-md-6 mb-4 mb-md-0 mx-auto align-self-center">
                <h2 class="fw-bold">About Founder</h2>
                <p class="mt-3" style="font-size: 13px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec vulputate arcu, non ultrices sapien. Suspendisse sodales non neque sed congue. In ac fermentum orci, vel euismod lorem. Vestibulum justo purus, aliquam ac nibh ac, commodo ultrices orci. Aliquam erat volutpat. 
                    <br><br>
                    Sed posuere ultricies enim, scelerisque egestas nunc laoreet nec. Nulla mauris nulla, posuere tristique nibh sit amet, molestie egestas sem. Vivamus faucibus a est a iaculis.
                    <br><br>
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris dapibus quam eu egestas eleifend. Cras nec pellentesque neque. Sed sit amet tempor nibh. Integer hendrerit, mi vitae lacinia faucibus, risus ligula mattis diam, a pellentesque nisl magna sit amet metus. 
                    <br><br>
                    Mauris facilisis enim quis felis aliquet maximus. Curabitur luctus convallis condimentum. Duis porttitor, augue ut elementum vestibulum, dui massa vehicula nunc.
                </p>
                <div class="mt-3">
                    <button class="btn btn-white text-white py-2 px-4" style="background-color: #61BC45;">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="container-fluid my-5" id="section6" style="padding-left: 0px; padding-right: 0px;">
        <div class="hero">
            <div class="p-4" style="background-color: #000000; border-radius: 10px;">
                <h2 class="fw-bold text-white">Join Our Community</h2>
                <form class="mt-3" action="" method="POST">
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Name *" style="border-radius: 0;">
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email Address *" style="border-radius: 0;">
                    </div>
                    <div class="mb-3">
                        <input name="phone" required pattern="^\+?[0-9]*$" placeholder="+229190000000" type="text" class="form-control" placeholder="Phone No.*" style="border-radius: 0;">
                    </div>
                    <div class="">
                        <button name="btn_contact" class="btn btn-white w-100 text-white" style="background: #61BC45; border-radius: 0;">Join Now <i class="bi bi-arrow-right-circle"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container-lg">
        <h2 class="fw-bold text-center">What People are Saying</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Items du carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="p-3">
                                <div class="row p-5" style="background-color: #F2F2F2;">
                                    <div class="col-3 mx-auto">
                                        <img src="images/Ellipse 2.png" alt="Person 1" class="img-fluid w-100">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex">
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                        </div>
                                        <p><strong>Highly recommended!</strong></p>
                                        <p>
                                            Nam malesuada nibh eget mi pharetra condimentum. Nam a mauris posuere, interdum mi vitae, tristique enim. Donec porta leo eget elit hendrerit
                                        </p>
                                        <p>-Alena Josksowinsigs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="p-3">
                                <div class="row p-5" style="background-color: #F2F2F2;">
                                    <div class="col-3 mx-auto">
                                        <img src="images/Ellipse 2 (1).png" alt="Person 2" class="img-fluid w-100">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex">
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                        </div>
                                        <p><strong>Highly recommended!</strong></p>
                                        <p>
                                            Nam malesuada nibh eget mi pharetra condimentum. Nam a mauris posuere, interdum mi vitae, tristique enim. Donec porta leo eget elit hendrerit
                                        </p>
                                        <p>-Alena Josksowinsigs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="p-3">
                                <div class="row p-5" style="background-color: #F2F2F2;">
                                    <div class="col-3 mx-auto">
                                        <img src="images/Ellipse 2.png" alt="Person 1" class="img-fluid w-100">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex">
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                        </div>
                                        <p><strong>Highly recommended!</strong></p>
                                        <p>
                                            Nam malesuada nibh eget mi pharetra condimentum. Nam a mauris posuere, interdum mi vitae, tristique enim. Donec porta leo eget elit hendrerit
                                        </p>
                                        <p>-Alena Josksowinsigs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="p-3">
                                <div class="row p-5" style="background-color: #F2F2F2;">
                                    <div class="col-3 mx-auto">
                                        <img src="images/Ellipse 2 (1).png" alt="Person 2" class="img-fluid w-100">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex">
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                            <span><i class="bi bi-star-fill fs-4" style="color: #464646;"></i></span>
                                        </div>
                                        <p><strong>Highly recommended!</strong></p>
                                        <p>
                                            Nam malesuada nibh eget mi pharetra condimentum. Nam a mauris posuere, interdum mi vitae, tristique enim. Donec porta leo eget elit hendrerit
                                        </p>
                                        <p>-Alena Josksowinsigs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Boutons de navigation -->
            <div class="mt-3 carousel-indicator1 d-flex justify-content-center">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
        </div>
        
    </section>
    
    <section class="container-fluid my-4" style="padding-left: 0px; padding-right: 0px;">
        <div class="hero1">
            <section class="search-section posi">
                <ul class="nav search-tabs">
                  <li class="search-item">
                    <a class="search-link active" href="#" data-target="destination">Football fields</a>
                  </li>
                  <li class="search-item">
                    <a class="search-link" href="#" data-target="business-trip">Gym & dance studio</a>
                  </li>
                  <li class="search-item">
                    <a class="search-link" href="#" data-target="featured">Event spaces</a>
                  </li>
                  <li class="search-item">
                    <a class="search-link" href="#" data-target="featured">Cultural hall</a>
                  </li>
                </ul>
              
                <!-- Contenu dynamique pour chaque onglet -->
                <div class="search-content" id="destination">
                  
                </div>
              
                <div class="search-content" id="business-trip" style="display: none;">
                  
                </div>
              
                <div class="search-content" id="featured" style="display: none;">
                  
                </div>
              </section>
        </div>
    </section>
    <?php
        // Include navigation bar
        include('./includes/footer.php') ;    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.querySelectorAll('.search-link').forEach(link => {
          link.addEventListener('click', function(event) {
            event.preventDefault();
      
            // Retirer la classe active de tous les liens
            document.querySelectorAll('.search-link').forEach(l => l.classList.remove('active'));
      
            // Ajouter la classe active au lien cliqué
            this.classList.add('active');
      
            // Masquer tous les contenus
            document.querySelectorAll('.search-content').forEach(content => content.style.display = 'none');
      
            // Afficher le contenu correspondant à l'onglet cliqué
            const targetId = this.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
          });
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>