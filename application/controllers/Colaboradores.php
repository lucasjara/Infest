<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-09-2019
 * Time: 1:51
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller
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
        $this->layout->setLayout("plantilla");
        $this->layout->view('vista');
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