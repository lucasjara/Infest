<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 01-09-2019
 * Time: 1:35
 */
?>
<style>
    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    /*
     * Sidebar
     */

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100; /* Behind the navbar */
        padding: 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 48px; /* Height of navbar */
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
    }

    .sidebar .nav-link.active {
        color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /*
     * Navbar
     */

    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
    }

    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    /*
     * Utilities
     */

    .border-top {
        border-top: 1px solid #e5e5e5;
    }

    .border-bottom {
        border-bottom: 1px solid #e5e5e5;
    }
</style>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/Listado">Administracion Infest</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/Login">Cerrar Session</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="users"></span>
                            Listado de Usuarios <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Inicio">
                            <span data-feather="home"></span>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Formulario">
                            <span data-feather="shopping-cart"></span>
                            Formulario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.infest.cl:2083/">
                            <span data-feather="layers"></span>
                            CPANEL
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Listado de Usuarios Registrados Infest</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="tabla_listado_usuarios">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>RUT</th>
                        <th>CORREO</th>
                        <th>EDAD</th>
                        <th>FECHA</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></link>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></link>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"></link>

<script>
    feather.replace()
</script>
<script>
    $('#tabla_listado_usuarios').DataTable({
        'language': {
            'url': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json',
        },
        'ajax': {
            'url': '/Listado/obtener_listado_usuarios',
            'datatype': 'json',
            'dataSrc': 'data',
            'type': 'post',
        },
        'pageLength':20,
        'columns': [
            {'data': 'ID'},
            {'data': 'NOMBRE'},
            {'data': 'APELLIDOS'},
            {'data': 'RUT'},
            {'data': 'CORREO'},
            {'data': 'EDAD'},
            {'data': 'FECHA'}
        ]
    });
</script>