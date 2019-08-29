<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 25-08-2019
 * Time: 23:02
 */
 ?>
<style>
    .mayuscula{
        text-transform: uppercase;
    }
</style>
<!-- Inicio Input Mask -->
<script src="<?=base_url('public/js/jquery.rut.chileno.js') ?>"></script>
<script src="<?=base_url('public/sweet/sweetalert.js') ?>"></script>
<link rel="stylesheet" href="<?=base_url('public/sweet/sweetalert.css') ?>">
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
                <img src="<?=base_url('public/img/logon.png') ?>" alt="">
            </a>
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    <a href="/Formulario">Formulario</a>
                </div>
                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="/">Inicio</a></li>
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
                <form class="contact-form" autocomplete="off">
                    <input class="mayuscula" type="text" placeholder="Nombre" id="txtNombre" required="required">
                    <input class="mayuscula" type="text" placeholder="apellidos" id="txtApellido" required="required">
                    <input class="mayuscula" type="text" placeholder="Rut" id="txtRut" >
                    <input class="mayuscula" type="email" placeholder="Correo" id="txtCorreo" required="required">
                    <input class="mayuscula" type="text" placeholder="Universidad / Liceo (Si no cuenta especificar Ninguna)" id="txtUniversidad" required="required">
                    <input class="mayuscula" type="text" placeholder="Carrera / Curso" id="txtCarrera" required="required">
                    <input type="number" placeholder="edad" id="txtEdad" required="required">
                    <input class="mayuscula" type="text" placeholder="Juego Favorito" id="txtJuego" required="required">
                    <button class="site-btn" type="button" id="btn_formulario">Enviar<img src="<?=base_url('public/endgame/img/icons/double-arrow.png') ?>" alt=""/></button>
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
    $(document).ready(function () {
// Variables Globales
        var btn_formulario = $("#btn_formulario");
        // Campos Formulario
        var nombres = $("#txtNombre")
        var apellidos = $("#txtApellido")
        var rut = $("#txtRut")
        var correo = $("#txtCorreo")
        var universidad = $("#txtUniversidad")
        var carrera = $("#txtCarrera")
        var edad = $("#txtEdad")
        var juego = $("#txtJuego")

        var rut_consulta = $("#rut_consulta")
        var dv_consulta = $("#dv_consulta")
// Fin Variables Globales
// Carga Inicial Web
        $('#txtRut').rut();
// Fin Carga Inicial Web
// Eventos
        btn_formulario.on('click', function () {
            var es_valido = $.rut.validar(rut.val().replace('.',''));
            if(es_valido){
                var array = {
                    nombre: nombres.val(),
                    apellidos: apellidos.val(),
                    rut: rut.val(),
                    correo: correo.val(),
                    universidad: universidad.val(),
                    carrera: carrera.val(),
                    edad: edad.val(),
                    juego: juego.val()
                };
                var request = envia_ajax("/Formulario/RegistroUsuarios", array)
                request.fail(function () {
                    swal("Alerta!", "Error al enviar Información recargue la pagina", "error");
                })
                request.done(function (data) {
                    if (data.respuesta == 'S') {
                        swal("Felicidades!", "Estas registrado , en los proximos minutos llegara a tu correo la confirmacion con el Codigo para presentarte el dia del evento", "success");
                        LimpiarFormulario();
                    }
                    else {
                        swal({
                            title: 'Alerta',
                            html:true,
                            text: data.data,
                            type: 'error',
                        });
                    }
                })
            }else{
                swal("Alerta!", "Rut Formato Incorrecto", "error");
            }
        });
        /*
        btn_consultar.on('click', function () {
            var array = {
                rut: rut_consulta.val(),
                dv: dv_consulta.val()
            };
            var request = envia_ajax("/inicio/consultar_usuarios", array)
            request.fail(function () {
                $('#titulo_modal_generico').html('Error')
                $('#modal_generico_body').html('Error al enviar peticion porfavor recargue la pagina')
                $('#modal_generico').modal('show')
            })
            request.done(function (data) {
                if (data.respuesta == 'S') {
                    var unir = rut_consulta.val()+dv_consulta.val();
                    var nombre_completo = data.data[0].NOMBRE_COMPLETO;
                    var agregado = "";
                    if (nombre_completo != null){
                        var rut_completo=data.data[0].RUT_COMPLETO;
                        var dv_completo=data.data[0].DV_COMPLETO;
                        var unidos = rut_completo+dv_completo;
                        agregado = " El viene acompañado de "+nombre_completo+" con el rut: "+formateaRut(unidos)+". ";
                    }
                    $("#titulo_modal_generico").html('<strong>Felicidades!</strong>')
                    $('#modal_generico_body').html("<div class='alert alert-success'><p>El rut: "+formateaRut(unir)+" ,se encuentra registrado en el sistema."+agregado+"</p></div>")
                    $('#modal_generico').modal('show')
                }
                else {
                    $("#titulo_modal_generico").html('<strong>Alerta!</strong>')
                    $('#modal_generico_body').html("<div class='alert alert-danger'><p>"+data.data+"</p></div>")
                    $('#modal_generico').modal('show')
                }
            })
        });
        */
// Fin Eventos
// Funciones
        function envia_ajax(url, data) {
            var variable = $.ajax({
                url: url,
                method: 'POST',
                data: data,
                'dataSrc': 'data',
                dataType: 'json',
            })
            return variable
        }
        function LimpiarFormulario(){
            $("#txtNombre").val('');
            $("#txtApellido").val('');
            $("#txtRut").val('');
            $("#txtCorreo").val('');
            $("#txtUniversidad").val('');
            $("#txtCarrera").val('');
            $("#txtEdad").val('');
            $("#txtJuego").val('');
        }
// Fin Funciones
    });
</script>