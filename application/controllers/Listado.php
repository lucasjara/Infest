<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 01-09-2019
 * Time: 1:33
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Listado extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata("usuario_activo") != null) {
            $this->layout->setLayout("plantilla");
            $this->layout->view('vista');
        } else {
            redirect("/Login");
        }
    }

    public function obtener_listado_usuarios()
    {
        $mensaje = new stdClass();
        $this->load->model("/InicioModel");
        $datos = $this->InicioModel->ObtenerListadoUsuarios();
        /*
        for ($i = 0; $i < count($datos); $i++) {
            $datos[$i]["ACCIONES"] = $this->formato_acciones($datos[$i]);
            $datos[$i]["ACTIVO"] = $this->formato_activo($datos[$i]["ACTIVO"]);
        }
        */
        $mensaje->data = $datos;
        $mensaje->respuesta = 'S';
        $this->output->set_content_type('application/json')->set_output(json_encode($mensaje));
    }
}