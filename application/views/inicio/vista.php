<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 24-08-2019
 * Time: 22:50
 */
 ?>
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
                <img src="<?=base_url('public/img/logon.png') ?>" alt="">
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    <a href="/Formulario">Formulario Asistentes</a>
                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="/">Inicio</a></li>
                    <!--<li><a href="">Torneos</a></li>-->
                    <li><a href="/Patrocinadores">Patrocinadores</a></li>
                    <li><a href="/Colaboradores">Colaboradores</a></li>
                    <!--<li><a href="">Invitados</a></li>-->
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=175772568581&autoLogAppEvents=1"></script>
<!-- Hero section -->
<section class="hero-section overflow-hidden">
 <div class="hero-slider owl-carousel">
  <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" id="id_contenido" data-setbg="<?=base_url('public/img/fondo_libre.jpg') ?>" >
   <div class="container">
    <h2><img src="<?=base_url('public/img/logo_infest.png') ?>" height="300"></h2>
    <p class="text-white" style="margin-bottom: 0px;">
        EL EVENTO DE TECNOLOGIA Y VIDEOJUEGOS MAS GRANDE DEL<br>
        SUR DE CHILE VUELVE EN UNA CUARTA EDICION
        <br>
        <br>
    05 Y 06 DE OCTUBRE <br>
    INACAP TEMUCO 12:00 HRS <br>
       </p>
       <h3 style="font-size: 80px;" class="text-white">ENTRADA LIBERADA</h3>
   </div>

  </div>
 </div>
</section>
<!-- Hero section end-->
<!-- Intro section -->
<section class="intro-section">
 <div class="container">
  <div class="row" style="text-align: center;">
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Organiza</div>
        <img src="<?=base_url('public/img/E-STUDENTS.png') ?>" alt="" height="180">
        <img src="<?=base_url('public/img/inacap.png') ?>" alt="" height="100">
    </div>
   </div>
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Patrocina</div>
        <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img height="250" src="<?=base_url('public/img/patrocinadores/winpy.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/patrocinadores/crossxgame.jpg') ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/patrocinadores/HOSTALES TEMUCO.png') ?>" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/patrocinadores/top8.png') ?>" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Colabora</div>
        <div id="carouselExampleIndicators2" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height="250" src="<?=base_url('public/img/colaboradores/xpg.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/colaboradores/REDRAGON.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/colaboradores/COUGAR.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="250" src="<?=base_url('public/img/colaboradores/CHECK AND PLAY BLANCO.png') ?>">
                </div>
            </div>
        </div>
    </div>
   </div>
  </div>
 </div>
</section>
<!-- Intro section end -->
<script>
    $ (document).ready(function () {
        $('.carousel').carousel({

        });
    });
</script>

<!-- Blog section -->
<section class="blog-section spad">
 <div class="container">
  <div class="row">
   <div class="col-xl-8 col-lg-8 col-md-7">
    <div class="section-title text-white">
     <h2>Ultimas Publicaciones</h2>
    </div>
    <!-- Blog item -->
    <div class="blog-item">
        <!-- SnapWidget -->
        <iframe src="https://snapwidget.com/embed/727989" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; height:380px"></iframe>
    </div>
   </div>
      <div class="col-xl-4 col-lg-4 col-md-5 sidebar">
          <div class="fb-page" data-href="https://www.facebook.com/infesttarreoinacap/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/infesttarreoinacap/" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/infesttarreoinacap/">Infest</a>
              </blockquote>
          </div>
      </div>
 </div>
</section>
<!-- Blog section end -->
<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="<?=base_url('public/img/fondo_v2.jpg') ?>"> <!-- -->
 <a href="https://www.youtube.com/embed/w1Cm2laMXZ4?autoplay=1&mute=1&enablejsapi=1" class="video-play-btn"><img src="<?=base_url('public/endgame/img/icons/solid-right-arrow.png') ?>" alt="#"></a>
 <div class="container">
  <div class="video-text">
   <h2>Infest 2018</h2>
   <p>Ven y mira lo que vivimos el año pasado, recuerda que este año se nos vienen nuevas novedades</p>
  </div>
 </div>
</section>
<!-- Intro section end -->
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