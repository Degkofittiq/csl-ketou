<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <title>HomePage</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>
    <?php
        // Include navigation bar
        include('./includes/header.php') ;    
    ?>
    <br>
    <section id="section1" class="container-lg ccc" data-aos="zoom-in" data-aos-delay="100">
        <div class="row position">
            <div class="col-12 col-md-5 mb-3 order-2 order-md-1 align-items-stretch">
                <br>
                <h1 class="ccc1" style="font-weight: 800; color: #252B42;">Vivez l'Émotion du Sport et le Plaisir des
                    Loisirs </h1>

                <p class="fs-5 tex">Plongez dans un univers où performance, détente et passion se rencontrent pour
                    répondre à toutes vos envies sportives et récréatives. </p>

                <div class="d-flex">
                    <div class="tex">
                        <button type="button" class="btn btn-success px-3 py-2">Nous rejoindre</button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-7 mb-3 order-1 order-md-2 align-items-stretch" data-aos="zoom-out"
                data-aos-delay="100">
                <div class="flex-fill">
                    <img src="image/woman-working-with-personal-trainer.jpg" alt="" class="img-fluid w-100">
                </div>
            </div>


        </div>
        <div class="row tex2">
            <div class="col-6 col-md-3 mb-3 mb-md-0">
                <h1 class="text-center" style="font-weight: 700; color: #96BB7C;">15K</h1>
                <p class="text-center" style="color: #252B42;">Happy Customers</p>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-md-0">
                <h1 class="text-center" style="font-weight: 700; color: #96BB7C;">150K</h1>
                <p class="text-center" style="color: #252B42;">Monthly Visitors</p>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-md-0">
                <h1 class="text-center" style="font-weight: 700; color: #96BB7C;">15</h1>
                <p class="text-center" style="color: #252B42;">Countries Worldwide</p>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-md-0">
                <h1 class="text-center" style="font-weight: 700; color: #96BB7C;">100+</h1>
                <p class="text-center" style="color: #252B42;">Top Partners</p>
            </div>
        </div>


    </section>
    <br>

    <section id="facilities" class="container-fluid p-5" style="background-color: #96bb7c; " data-aos="zoom-in"
        data-aos-delay="100">

        <h2 class="text-center" style="color: #252B42; font-weight: 600;">Decouvrez nos activites</h2>
        <p class="text-center">
            Problems trying to resolve the conflict between <br>
            the two major realms of Classical physics: Newtonian mechanics
        </p>

        <div class="row list">
            <div class="scroll-container">


                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div> 

                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div>


                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item">
                    <div class="image-container">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                        <div class="overlay">
                            <h2>Basket</h2>
                            <p class="description">Description courte du basket.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br>
    </section>


    <section id="section2" class="container-fluid bg-white p-4" data-aos="zoom-in" data-aos-delay="100" style=" padding: 100px 0 !important;">
        <div class="container-lg">

            <br><br>
            <div class="row">
                <div class="col-12 col-md-5 mb-3 order-2 order-md-1 align-self-center mt-5">
                    <span style="display: block; width: 30%; border: 5px solid #E74040;"></span>
                    <br><br>
                    <h2 style="font-weight: 800;">A propos de nous </h2>
                    <p class="mt-2 fs-5">
                        Problems trying to resolve the conflict between
                        the two major realms of Classical physics:
                        <br>
                        Newtonian mechanics Problems trying to resolve the conflict between
                        the two major realms of Classical physics:
                        <br>
                        Newtonian mechanics Problems trying to resolve the conflict
                    </p>
                    <br><br>
                    <div>
                        <button type="button" class="btn btn-outline-success fs-4" style="border: none;" onclick="window.location.href='contact.php';">Cliquez pour voir la bio du fondateur <i
                                class="bi bi-chevron-right ms-3"></i></button>
                    </div>
                </div>
                <div class="col-12 col-md-7 mb-3 order-1 order-md-2" data-aos="zoom-out" data-aos-delay="100">
                    <div class="flex-fill">
                        <img src="image/[freepicdownloader.com]-men-with-battle-rope-battle-ropes-exercise-fitness-gym-crossfit-concept-gym-sport-rope-training-athlete-workout-normal.jpg"
                            alt="" class="img-fluid w-100">
                    </div>
                </div>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-5 events" style="background-color: #FFE0E0;">
        <div class="container-lg">
            <span style="display: block; width: 30%; border: 5px solid #E74040;"></span>
            <br><br>
            <h2 style="font-weight: 800;">Programmes et Evenements </h2>
            <p class="mt-2 fs-5">
                Problems trying to resolve the conflict between
                the two major realms of Classical physics:
            </p>


            <div class="row eventi titi">
                <div class="col-12 col-md-6 mb-3 mb-md-0 mx-auto" style="background-color: #F2C94C; border-radius: 20px; margin: 0 30px !important;">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h3 style="font-weight: 900;">13</h3>
                            <p style="font-size: 12px;">apr</p>
                        </div>
                        <div class="">
                            <div class="d-flex" style="justify-content: center;">
                                <div>
                                    <p>Name of event</p>
                                </div>
                                <div class="align-self-center">
                                    <span class="ms-3 mb-3"
                                        style="display: block; border-bottom: 2px solid black; width: 4rem;"></span>
                                </div>
                            </div>
                            <br>
                            <p style="font-weight: 800;">A day with our wonderful children, A day with our wonderful children, A day with our wonderful children,A day with our wonderful children,, A day with our wonderful children, A day with our wonderful children, A day with our wonderful children A day with our wonderful children A day with our wonderful children</p>
                        </div>
                    </div>
                    <div class="row rowex justify-content-md-center" style="padding: 0 50px;">
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <button class="btn btn-dark w-100 py-3" style="border: 1px solid white; background: #000000;">SOUSCRIRE</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3 mb-md-0 mx-auto" style="background-color: #F2C94C; border-radius: 20px; margin: 0 30px !important;">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h3 style="font-weight: 900;">13</h3>
                            <p style="font-size: 12px;">apr</p>
                        </div>
                        <div class="">
                            <div class="d-flex" style="justify-content: center;">
                                <div>
                                    <p>Name of event</p>
                                </div>
                                <div class="align-self-center">
                                    <span class="ms-3 mb-3"
                                        style="display: block; border-bottom: 2px solid black; width: 4rem;"></span>
                                </div>
                            </div>
                            <br>
                            <p style="font-weight: 800;">A day with our wonderful children, A day with our wonderful children, A day with our wonderful children,A day with our wonderful children,, A day with our wonderful children, A day with our wonderful children, A day with our wonderful children A day with our wonderful children A day with our wonderful children</p>
                        </div>
                    </div>
                    <div class="row rowex justify-content-md-center" style="padding: 0 50px;">
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <button class="btn btn-dark w-100 py-3" style="border: 1px solid white; background: #000000;">SOUSCRIRE</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3 mb-md-0 mx-auto" style="background-color: #F2C94C; border-radius: 20px;  margin: 0 30px !important;">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h3 style="font-weight: 900;">13</h3>
                            <p style="font-size: 12px;">apr</p>
                        </div>
                        <div class="">
                            <div class="d-flex" style="justify-content: center;">
                                <div>
                                    <p>Name of event</p>
                                </div>
                                <div class="align-self-center">
                                    <span class="ms-3 mb-3"
                                        style="display: block; border-bottom: 2px solid black; width: 4rem;"></span>
                                </div>
                            </div>
                            <br>
                            <p style="font-weight: 800;">A day with our wonderful children, A day with our wonderful children, A day with our wonderful children,A day with our wonderful children,, A day with our wonderful children, A day with our wonderful children, A day with our wonderful children A day with our wonderful children A day with our wonderful children</p>
                        </div>
                    </div>
                    <div class="row rowex justify-content-md-center" style="padding: 0 50px;">
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <input type="text" class="form-control py-3" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-4 mb-3 rowexi">
                            <button class="btn btn-dark w-100 py-3" style="border: 1px solid white; background: #000000;">SOUSCRIRE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row eventi">
    
                <div class=" table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Opening</th>
                                <th scope="col">Closing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monday</td>
                                <td><input type="time" class="form-control" value="09:00"></td>
                                <td><input type="time" class="form-control" value="18:00"></td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td><input type="time" class="form-control" value="08:00"></td>
                                <td><input type="time" class="form-control" value="21:00"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
            </div>

        </div>





    </section>

    <br><br><br>
    
    <?php
        include('./includes/footer.php');
        include('./includes/scripts.php');
    ?>

</body>

</html>