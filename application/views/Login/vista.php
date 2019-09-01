<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 01-09-2019
 * Time: 0:33
 */
?>
<script src="<?=base_url('public/sweet/sweetalert.js') ?>"></script>
<link rel="stylesheet" href="<?=base_url('public/sweet/sweetalert.css') ?>">
<script>
    // assumes you're using jQuery
    $(document).ready(function() {
        <?php if($this->session->flashdata('msg')){ ?>
        window.onload = function() {
            window.setTimeout(function () {
                swal("Alerta!","<?php echo $this->session->flashdata('msg'); ?>","error")
            }, 1000)
        };
        <?php } ?>
    });
</script>
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="<?=base_url('public/css/styles.css') ?>">
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Login</h3>
                <div class="d-flex justify-content-end social_icon">
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="/Login/InicioSistema">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Recordarme
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <a href="#">Olvidaste tu Contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</div>
 