<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25-08-2019
 * Time: 23:02
 */
 ?>
<!-- Inicio Input Mask -->
<script src="<?=base_url('public/js/jquery.rut.chileno.js') ?>"></script>
<!-- Fin Input Mask -->
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
                    <input type="text" placeholder="Nombre" id="txtNombre">
                    <input type="text" placeholder="apellido" id="txtApellido">
                    <input type="text" placeholder="Rut" id="txtRut">
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
                <p>
                    Es necesario para el ingreso el previo registro, te enviaremos un correo con la confirmación y un Codigo de registro para presentarte el dia del evento.</p>
                <div class="cont-info">
                    <div class="ci-icon"><img src="<?=base_url('public/endgame/img/icons/location.png') ?>" alt=""></div>
                    <div class="ci-text">Luis Durand 2150, Temuco, Región de la Araucanía</div>
                </div>
                <div class="cont-info">
                    <div class="ci-icon"><img src="<?=base_url('public/endgame/img/icons/phone.png') ?>" alt=""></div>
                    <div class="ci-text">+569 5938 3211</div>
                </div>
                <div class="cont-info">
                    <div class="ci-icon"><img src="<?=base_url('public/endgame/img/icons/mail.png') ?>" alt=""></div>
                    <div class="ci-text">informaciones@infest.cl</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact page end-->
<script>
    $('#txtRut').rut();
</script>