<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-09-2019
 * Time: 1:51
 */
 ?>
<style>
    .mayuscula {
        text-transform: uppercase;
    }

    .special-card {
        /* create a custom class so you
           do not run into specificity issues
           against bootstraps styles
           which tends to work better than using !important
           (future you will thank you later)*/

        background-color: rgba(245, 245, 245, 1);
        opacity: .4;
    }
</style>
<!-- Inicio Input Mask -->
<script src="<?= base_url('public/js/jquery.rut.chileno.js') ?>"></script>
<script src="<?= base_url('public/sweet/sweetalert.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('public/sweet/sweetalert.css') ?>">
<!-- Fin Input Mask -->
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
            <a href="/" class="site-logo" style="margin-top: -1%;">
                <img src="<?= base_url('public/img/logon.png') ?>" alt="">
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    <a href="/Formulario">Formulario Asistentes</a>
                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/Patrocinadores">Patrocinadores</a></li>
                    <li><a href="/Colaboradores">Colaboradores</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->
<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="<?= base_url('public/img/fondo_libre.jpg') ?>">
    <div class="page-info">
        <h2>Colaboradores</h2>
        <div class="site-breadcrumb">
            <a href="">Inicio</a> /
            <span>Colaboradores 2019</span>
        </div>
    </div>
</section>
<!-- Page top end-->
<!-- Contact page -->
<section class="contact-page">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/ALLTEC.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/AMD.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/ARCADE UCT.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/BALLISTIX.png') ?>"  >
            </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/CHECK AND PLAY BLANCO.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/COSPLAY BATTLE.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/COUGAR.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/DRAGSTER.png') ?>"  >
            </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/DRONESCAN.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/FANTECH.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/FRENTE SUR.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/HIT.png') ?>"  >
            </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/INFIGHT.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/INJUV.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/KALEIDO PRODUCCIONES.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/LG.png') ?>"  >
            </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/MSI LATERAL NEGRO.png') ?>" >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/PROTOCORGI ANCHO.png') ?>"  >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/PUNTO DE EXPERIENCIA.png') ?>" >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/REDRAGON.png') ?>"  >
            </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/SAMSUG.png') ?>" >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/THERMALTAKE.png') ?>" >
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/TIER1.png') ?>" >
            </div>

            <div class="col-md-3">
                <img src="<?= base_url('public/img/colaboradores/xpg.png') ?>" >
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
            <button class="site-btn">Suscribirse <img src="<?= base_url('public/endgame/img/icons/double-arrow.png') ?>"
                                                      alt="#"/></button>
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
            <li><a href="/">Inicio</a></li>
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

