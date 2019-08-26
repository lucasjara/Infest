<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25-08-2019
 * Time: 23:02
 */
 ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=175772568581&autoLogAppEvents=1"></script>

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

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="<?=base_url('public/img/fondo_libre.jpg') ?>">
    <div class="page-info">
        <h2>Formulario</h2>
        <div class="site-breadcrumb">
            <a href="">Inicio</a>  /
            <span>Formulario</span>
        </div>
    </div>
</section>
<!-- Page top end-->


<!-- Contact page -->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <form class="contact-form">
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="apellido">
                    <input type="text" placeholder="Rut">
                    <input type="email" placeholder="Correo">
                    <input type="text" placeholder="Universidad / Liceo (Si no cuenta especificar Ninguna)">
                    <input type="text" placeholder="Carrera / Curso">
                    <input type="number" placeholder="edad">
                    <input type="text" placeholder="Juego Favorito">
                    <button class="site-btn">Enviar<img src="<?=base_url('public/endgameimg/icons/double-arrow.png') ?>" alt=""/></button>
                </form>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
                <h3>Recordatorio</h3>
                <p>Es necesario para el ingreso el previo registro, te enviaremos un correo con la confirmación y un Codigo de registro para presentarte el dia del evento.</p>
                <div class="cont-info">
                    <div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
                    <div class="ci-text">Luis Durand 2150, Temuco, Región de la Araucanía</div>
                </div>
                <div class="cont-info">
                    <div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
                    <div class="ci-text">+569 8400 9285</div>
                </div>
                <div class="cont-info">
                    <div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
                    <div class="ci-text">infest@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact page end-->


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
