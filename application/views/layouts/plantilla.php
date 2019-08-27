<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 14-01-2018
 * Time: 20:40
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Infest Temuco</title>
    <meta name="description" content="El evento de Tecnología y Videojuegos más grande de Temuco ya es una realidad">
    <meta name="keywords" content="infest, inacap, temuco">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link href="<?=base_url('public/img/logo_infest.ico') ?>" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/slicknav.min.css') ?>"/>
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/owl.carousel.min.css') ?>"/>
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/magnific-popup.css') ?>"/>
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/animate.css') ?>"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('public/endgame/css/style.css') ?>"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<script src="<?=base_url('public/endgame/js/jquery-3.2.1.min.js') ?>"></script>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="header-social d-flex justify-content-end">
            <p>Siguenos:</p>
            <a href="https://www.facebook.com/infesttarreoinacap"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/infesttemuco/"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="home.html" class="site-logo" style="margin-top: -1%;">
                <img src="<?=base_url('public/img/logon.png') ?>" alt="">
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    <!--<a href="">Login</a><a href="">Register</a> -->
                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Torneos</a></li>
                    <li><a href="">Patrocinadores</a></li>
                    <li><a href="">Colaboradores</a></li>
                    <li><a href="">Invitados</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->
<?php echo $content_for_layout; ?>
<!-- Newsletter section -->
<section class="newsletter-section">
    <div class="container">
        <h2>Recibe todas las novedades al suscribirte</h2>
        <form class="newsletter-form">
            <input type="text" placeholder="Ingresa tu correo">
            <button class="site-btn">Suscribirse  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></button>
        </form>
    </div>
</section>
<!-- Newsletter section end -->
<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-left-pic">
            <!--<img src="<?=base_url('public/endgame/img/footer-left-pic.png') ?>" alt="">-->
        </div>
        <div class="footer-right-pic">
            <!--<img src="<?=base_url('public/endgame/img/footer-right-pic.png') ?>" alt="">-->
        </div>
        <a href="#" class="footer-logo">
            <img src="<?=base_url('public/img/logon.png') ?>" alt="">
        </a>
        <ul class="main-menu footer-menu">
            <li><a href="">Inicio</a></li>
            <li><a href="">Torneos</a></li>
            <li><a href="">Patrocinadores</a></li>
            <li><a href="">Colaboradores</a></li>
            <li><a href="">Invitados</a></li>
        </ul>
        <div class="footer-social d-flex justify-content-center">
            <a href="https://www.facebook.com/infesttarreoinacap"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/infesttemuco"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
    </div>
</footer>
<!-- Footer section end -->
<!--====== Javascripts & Jquery ======-->
<script src="<?=base_url('public/endgame/js/bootstrap.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/owl.carousel.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.sticky-sidebar.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/main.js') ?>"></script>
</body>
</html>
