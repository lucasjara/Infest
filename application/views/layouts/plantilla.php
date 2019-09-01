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
<?php echo $content_for_layout; ?>
<!--====== Javascripts & Jquery ======-->
<script src="<?=base_url('public/endgame/js/bootstrap.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/owl.carousel.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.sticky-sidebar.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?=base_url('public/endgame/js/main.js') ?>"></script>
<!-- Inicio Modal Generico -->
<div class="modal fade" id="modal_generico" tabindex="-1"
     role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 id="titulo_modal_generico"></h3>
            </div>
            <div class="modal-body">
                <h4 id="modal_generico_body"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Generico -->
</body>
</html>
