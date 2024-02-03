<?php
    include('constantes.php');
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>
            <?= $APP_NAME ?> - A propos
        </title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"/>
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/icon.png"/>
        <link rel="manifest" href="assets/img/favicons/manifest.json"/>
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png"/>
        <meta name="theme-color" content="#ffffff"/>
        <!-- ===============================================-->
        <!--    CraigStyle-->
        <!-- ===============================================-->
        <link href="assets/css/theme.css" rel="stylesheet"/>
        <style type="text/css">.craiglogobar { display: flex; justify-content: flex-start; align-items: flex-start; }</style>
    </head>
    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand craiglogobar" href="index.html"> <h2><img src="assets/img/favicons/logo_site_web.png" height="40" alt="logo"/> </h2> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span>
                    </button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Accueil</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="produits.php">Produits</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#">A propos</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="#!" style="display:none;">Sign In</a><a class="btn btn-warning ms-3" href="#!">Se connecter</a>
                        </div>
                    </div>
                </div>
            </nav>
            <section class="pt-7">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-md-start text-center py-6">
                            <h1 class="mb-4 fs-9 fw-bold">Bienvenue dans <?= $APP_NAME?></h1>
                            <p class="mb-6 lead text-secondary"> <?= $APP_NAME?> est une start-up innovante spécialisé dans la création des solutions numérique et d'équipement technologique pour les entreprises et les particulier.<br class="d-none d-xl-block"/> <br class="d-none d-xl-block"/> <br/>Vos besoins, nos services.</p>
                            <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg" href="produits.php" role="button">Nos services</a><a class="btn btn-link text-warning fw-medium" href="produits.php#feature"><span class="fas fa-play me-2"></span>Offres </a>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt=""/>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================================-->
            <!-- <section> début ============================-->
            <section class="pt-5 pt-md-9 mb-6" id="feature">
                <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(assets/img/category/shape.png);opacity:.5;">
</div>
                <!--/.bg-holder-->
                <div class="container">
                    <h1 class="fs-9 fw-bold mb-4 text-center"> Nos <br class="d-none d-xl-block"/>services</h1>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mb-2"> 
                            <img class="mb-3 ms-n3" src="assets/img/category/icon1.png" width="75" alt="Feature"/>
                            <h4 class="mb-3">Documentation</h4>
                            <p class="mb-0 fw-medium text-secondary">Création et dispositions des magazines pour les débutant dans le monde informatique</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2"> 
                            <img class="mb-3 ms-n3" src="assets/img/category/icon2.png" width="75" alt="Feature"/>
                            <h4 class="mb-3">Web conceptor</h4>
                            <p class="mb-0 fw-medium text-secondary">Création des sites et applications web pour vos entreprises</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2"> 
                            <img class="mb-3 ms-n3" src="assets/img/category/icon3.png" width="75" alt="Feature"/>
                            <h4 class="mb-3">App creator</h4>
                            <p class="mb-0 fw-medium text-secondary">Conceptions des applications mobile et de bureau pour vos besoins.</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2"> 
                            <img class="mb-3 ms-n3" src="assets/img/category/icon4.png" width="75" alt="Feature"/>
                            <h4 class="mb-3">Ux/Ui</h4>
                            <p class="mb-0 fw-medium text-secondary">Création d'affiche professionnel fait par des professionnel.</p>
                        </div>
                    </div>
                    <div class="text-center"><a class="btn btn-warning" href="commande.php!" role="button">Passer commande</a>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5" id="validation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="text-secondary">A propos de <?= $APP_NAME?></h5>
                            <h2 class="mb-2 fs-7 fw-bold">A savoir sur nous</h2>
                            <p class="mb-4 fw-medium text-secondary">
                Matrix est une entreprise innovante qui se spécialise dans la création
de solutions numériques et équipements technologiques pour les
entreprises et les particuliers. </p>
                            <h4 class="fs-1 fw-bold">Ce que nous sommes</h4>
                            <p class="mb-4 fw-medium text-secondary">Notre entreprise vise à développer des solutions technologiques
innovantes pour améliorer la vie quotidienne des gens.
Nous nous engageons à utiliser les dernières avancées en matière de
technologie numérique pour créer des produits et des services qui
répondent aux besoins de nos clients</p>
                            <h4 class="fs-1 fw-bold">idéos</h4>
                            <p class="mb-4 fw-medium text-secondary">Faciliter l’accès à la culture numérique pour tous
via une programmation variée</p>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid" src="assets/img/validation/validation.png" alt=""/>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5" id="manager">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="assets/img/manager/manager.png" alt=""/>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="text-secondary">Essayez vous ne serrez pas deçu</h5>
                            <p class="fs-7 fw-bold mb-2">Qualité des produits</p>
                            <p class="mb-4 fw-medium text-secondary"> <?= $APP_NAME?> est une start-up basé sur la Conception des solutions informatique et la création des contenues informatique pour un apprentissage de qualité<br/>Nos produit sont :. </p>
                            <div class="d-flex align-items-center mb-3"> 
                                <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick"/>
                                <p class="fw-medium mb-0 text-secondary">Garantis sur facture<br/>Vous êtes garantie.</p>
                            </div>
                            <div class="d-flex align-items-center mb-3"> 
                                <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick"/>
                                <p class="fw-medium mb-0 text-secondary">Simple et intuitif<br/>Ne vous perdez pas </p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick"/>
                                <p class="fw-medium mb-0 text-secondary"> Rapide et sécurisé <br/>les produit sont livré en temps reccord.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5" id="marketer" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="text-secondary">A savoir sur <?= $APP_NAME?></h5>
                            <p class="mb-2 fs-8 fw-bold">Notre équipe</p>
                            <p class="mb-4 fw-medium text-secondary">Few would argue that, despite the advancements of<br/>feminism over the past three decades, women still face a<br/>double standard when it comes to their behavior.</p>
                            <h4 class="fw-bold fs-1">Accessory makers</h4>
                            <p class="mb-4 fw-medium text-secondary">Nous sommes une équipe de 10 personnes composé des développeurs, des techniciens en mécanique et électronique, des designers, des marketeurs et des ménagères.</p>
                            <h4 class="fw-bold fs-1">Alterationists</h4>
                            <p class="mb-4 fw-medium text-secondary">Nous avons tous une passion commune pour la technologie, ainsi qu’une vision partagée pour notre start-up.</p>
                            <h4 class="fw-bold fs-1">Custom Design designers</h4>
                            <p class="mb-4 fw-medium text-secondary">Nous travaillons ensemble dans un esprit de collaboration, de créativité et d’excellence.</p>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid" src="assets/img/marketer/marketer.png" alt=""/>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-md-11 py-8" id="superhero">
                <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
</div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="fw-bold mb-4 fs-7">Besoin d'aide ?</h1>
                            <p class="mb-5 text-info fw-medium">Avez-vous besoin d'en savoir plus sur <?= $APP_NAME?> ? consultez notre plan d'affaire <a href="assets/docs/plan_d_affaire.pdf">ici</a><br/><br/>Ou Ecrivez-nous sur WhatsApp</p>
                            <button class="btn btn-warning btn-md"><a href="https://wa.me/+243900800466" style="text-decoration:none;color:white;">Contactez-nous</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5" id="marketing" style="display:none">
                <div class="container">
                    <h1 class="fw-bold fs-6 mb-3">Marketing Strategies</h1>
                    <p class="mb-6 text-secondary">Join 40,000+ other marketers and get proven strategies on email marketing</p>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="assets/img/marketing/marketing01.png" alt=""/>
                                <div class="card-body ps-0">
                                    <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                    <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="assets/img/marketing/marketing02.png" alt=""/>
                                <div class="card-body ps-0">
                                    <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                    <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="assets/img/marketing/marketing03.png" alt=""/>
                                <div class="card-body ps-0">
                                    <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                    <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <!-- <section> close ============================-->
            <!-- ============================================-->
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <?php
include('footer.php')
            ?>
            <!-- <section> close ============================-->
            <!-- ============================================-->
        </main>
        <!-- ===============================================-->
        <!--    Fin corps craig comment-->
        <!-- ===============================================-->
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="assets/js/theme.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet"/>
    </body>
</html>