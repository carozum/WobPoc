<?php include('front-page-header.php') ?>
<main class="container-fluid px-0">
    <!-- calculateur -->
    <section>
        <div class="container">
            <!-- <h2 class="display-6 text-center mb-4">Qu'est ce qui vous amène ici ? <br>Etes vous déjà présent sur le Web ou sur les réseaux sociaux?</h2> -->
            <?php include('simulateur.php'); ?>
        </div>

    </section>

    <!-- services -->
    <section class="album py-5 bg-light">
        <div class="container">
            <h2 class="display-6 text-center mb-4">Pour devenir visible...<br> nous vous proposons l'approche suivante : </h2>
            <div class="row">
                <!-- service 1 gestion de projet -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card shadow mb-2 rounded-5">
                        <img src="img/project-management.png" class="card-img-top p-5" alt="..." style="display: block; max-width: 250px;">
                        <div class="card-body pt-0">
                            <h5 class="card-title">Un projet bien défini</h5>
                            <p class="card-text ">Etre visible en définissant dès le début les attentes de résultat
                                du projet et en
                                et en proposant un contenu intéressant qui colle à votre identité et à votre cible
                            </p>
                            <a href="archive-gestion-projet.html" class="btn btn-primary rounded-5">Un projet bien défini?</a>
                        </div>
                    </div>
                </div>

                <!-- service 2 site internet -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card shadow mb-2 rounded-5">
                        <img src="img/optimization.png" class="card-img-top p-5" alt="..." style="display: block; max-width: 250px;">
                        <div class="card-body pt-0">
                            <h5 class="card-title">Un site bien construit</h5>
                            <p class="card-text">C'est à dire qu'il faut choisir le bon outil pour construire son site (site vitrine, Wordpress...) et
                                utiliser les normes W3C pour structurer son contenu.
                            </p>
                            <a href="archive-site-internet.html" class="btn btn-primary rounded-5">Un site bien
                                construit?</a>
                        </div>
                    </div>
                </div>

                <!-- service 3 expérience utilisateur -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card shadow mb-2 rounded-5">
                        <img src="img/user-experience.png" class="card-img-top p-5" alt="..." style="display: block; max-width: 250px;">
                        <div class="card-body pt-0">
                            <h5 class="card-title">Un design bien pensé</h5>
                            <p class="card-text">Ce qui correspond à offrir une bonne expérience à l'utilisateur de
                                mon site à la fois plaisante, intuitice et facile.
                            </p>
                            <a href="archive-design.html" class="btn btn-primary rounded-5">Un design bien pensé?</a>
                        </div>
                    </div>
                </div>


                <!-- service 4 expérience utilisateur -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card shadow mb-2 rounded-5">
                        <img src="img/chat.png" class="card-img-top p-5" alt="..." style="display: block; max-width: 250px;">
                        <div class="card-body pt-0">
                            <h5 class="card-title">Une communication efficace</h5>
                            <p class="card-text">
                                Avec un référencement, une e-publicité et une communication sur les réseaux sociaux
                                efficace
                            </p>
                            <a href="archive-communication.html" class="btn btn-primary rounded-5">Une com efficace?</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="album pt-5 pb-0 mb-0">
        <h2 class="display-6 text-center pt-5 mb-0" style="background-color:#daa74931 ;">Derniers articles de blog</h2>
        <div id="myCarousel" class="carousel slide mb-3 carousel-dark" data-bs-touch="true" data-bs-keyboard="true" data-bs-interval="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#daa74931" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <div class="card shadow mb-2 rounded-5 m-auto" style="max-width: 700px;">
                                <div class="card-body d-flex flex-column justify-content-center" style="height: 22rem">
                                    <h3 class="card-title text-center">Article 1</h3>
                                    <p class="card-text ">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci sapiente praesentium aliquid voluptates, quas pariatur dolores laboriosam qui, quidem enim vitae. Nihil, enim nemo sequi quia tempora obcaecati asperiores quae.
                                    </p>
                                    <p>
                                        <a href="archive-communication.html" class="btn btn-lg btn-warning rounded-5">Lire l'article</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#daa74931" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <div class="card shadow mb-2 rounded-5 m-auto" style="max-width: 700px">
                                <div class="card-body d-flex flex-column justify-content-center" style="height: 22rem">
                                    <h3 class="card-title text-center">Article 2</h3>
                                    <p class="card-text ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni enim, repudiandae rerum doloremque esse nemo repellendus earum itaque incidunt quisquam perspiciatis pariatur officia tenetur alias cupiditate ipsum? Voluptatibus, praesentium nisi?
                                    </p>
                                    <p>
                                        <a href="archive-communication.html" class="btn btn-lg btn-warning rounded-5">Lire l'article</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#daa74931" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <div class="card shadow mb-2 rounded-5 m-auto" style="max-width: 700px">
                                <div class="card-body d-flex flex-column justify-content-center" style="height: 22rem;">
                                    <h3 class="card-title text-center">Article 3</h3>
                                    <p class="card-text ">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium.
                                    </p>
                                    <p>
                                        <a href="archive-communication.html" class="btn btn-lg btn-warning rounded-5">Lire l'article</a>
                                    </p>
                                </div>
                            </div>
                            <!-- <h1>Article 3</h1>
                            <p></p>
                            <p><a class="btn btn-lg warning" href="#">Lire l'article</a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</main>