<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 24-08-2019
 * Time: 22:50
 */
 ?>
<!-- Page Preloder -->
<div id="preloder">
 <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
 <div class="header-warp">
  <div class="header-social d-flex justify-content-end">
   <p>Siguenos:</p>
   <a href="#"><i class="fa fa-facebook"></i></a>
   <a href="#"><i class="fa fa-instagram"></i></a>
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

<!-- Hero section -->
<section class="hero-section overflow-hidden">
 <div class="hero-slider owl-carousel">
  <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" id="id_contenido" data-setbg="<?=base_url('public/img/fondo.jpg') ?>" >
   <!--<div class="container">
    <h2><em>Infest</em></h2>
    <p><em>El evento de Tecnología y Videojuegos más grande de Temuco ya es una realidad</em></p>
    <a href="#" class="site-btn">Participar<img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
   </div>
   -->
  </div>
  <!--<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="<?=base_url('public/endgame/img/slider-bg-2.jpg') ?>">
   <div class="container">
    <h2>Game on!</h2>
    <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
    <a href="#" class="site-btn">Read More  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
   </div>
  </div>
  -->
 </div>
</section>
<!-- Hero section end-->


<!-- Intro section -->
<section class="intro-section">
 <div class="container">
  <div class="row" style="text-align: center;">
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Organizador</div>
        <img src="<?=base_url('public/img/icons/double-arrow.png') ?>" alt="" height="20%;">
     <div class="top-meta">Auspiciador</div>
        <img src="<?=base_url('public/img/icons/double-arrow.png') ?>" alt="" height="20%;">
    </div>
   </div>
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Patrocinadores</div>
        <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style="background-color: white;border-radius: 10px;">
                <div class="carousel-item active">
                    <img height="200" src="<?=base_url('public/img/winpy.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/crossxgame.jpg') ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/hostales_temuco.png') ?>" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/top8.png') ?>" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="intro-text-box text-box text-white">
     <div class="top-meta">Colaboradores</div>
        <div id="carouselExampleIndicators2" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style="background-color: white;border-radius: 10px;">
                <div class="carousel-item active">
                    <img height="200" src="<?=base_url('public/img/xpg.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/redragon.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/cougar.png') ?>">
                </div>
                <div class="carousel-item">
                    <img height="200" src="<?=base_url('public/img/ckeck_and_play.png') ?>">
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
            interval: 2000
        });
    });
</script>

<!-- Blog section -->
<section class="blog-section spad">
 <div class="container">
  <div class="row">
   <div class="col-xl-9 col-lg-8 col-md-7">
    <div class="section-title text-white">
     <h2>Ultimas Noticias</h2>
    </div>
    <ul class="blog-filter">
     <li><a href="#">Racing</a></li>
     <li><a href="#">Shooters</a></li>
     <li><a href="#">Strategy</a></li>
     <li><a href="#">Online</a></li>
    </ul>
    <!-- Blog item -->
    <div class="blog-item">
     <div class="blog-thumb">
      <img src="<?=base_url('public/endgame/img/blog/1.jpg') ?>" alt="">
     </div>
     <div class="blog-text text-box text-white">
      <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
      <h3>The best online game is out now!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
      <a href="#" class="read-more">Read More  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
     </div>
    </div>
    <!-- Blog item -->
    <div class="blog-item">
     <div class="blog-thumb">
      <img src="<?=base_url('public/endgame/img/blog/2.jpg') ?>" alt="">
     </div>
     <div class="blog-text text-box text-white">
      <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
      <h3>The best online game is out now!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
      <a href="#" class="read-more">Read More  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
     </div>
    </div>
    <!-- Blog item -->
    <div class="blog-item">
     <div class="blog-thumb">
      <img src="<?=base_url('public/endgame/img/blog/3.jpg') ?>" alt="">
     </div>
     <div class="blog-text text-box text-white">
      <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
      <h3>The best online game is out now!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
      <a href="#" class="read-more">Read More  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
     </div>
    </div>
   </div>
   <div class="col-xl-3 col-lg-4 col-md-5 sidebar">

  </div>
 </div>
</section>
<!-- Blog section end -->


<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="<?=base_url('public/endgame/img/promo-bg.jpg') ?>">
 <a href="https://www.youtube.com/watch?v=w1Cm2laMXZ4" class="video-play-btn video-popup"><img src="<?=base_url('public/endgame/img/icons/solid-right-arrow.png') ?>" alt="#"></a>
 <div class="container">
  <div class="video-text">
   <h2>Infest 2018</h2>
   <p>Ven y mira lo que vivimos el año pasado, recuerda que este año se nos vienen nuevas novedades</p>
  </div>
 </div>
</section>
<!-- Intro section end -->


<!-- Featured section -->
<!--
<section class="featured-section">
 <div class="featured-bg set-bg" data-setbg="<?=base_url('public/endgame/img/featured-bg.jpg') ?>"></div>
 <div class="featured-box">
  <div class="text-box">
   <div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
   <h3>The game you’ve been waiting  for is out now</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
   <a href="#" class="read-more">Read More  <img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt="#"/></a>
  </div>
 </div>
</section>
-->
<!-- Featured section end-->



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
   <a href="#"><i class="fa fa-facebook"></i></a>
   <a href="#"><i class="fa fa-instagram"></i></a>
  </div>
  <div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
 </div>
</footer>
<!-- Footer section end -->
