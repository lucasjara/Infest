<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 01-09-2019
 * Time: 0:32
 */

class Login extends CI_Controller
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
        $this->session->unset_userdata('usuario_activo');
        $this->layout->setLayout("plantilla");
        $this->layout->view('vista');
    }

    public function InicioSistema()
    {
        $mensaje = new stdClass();
        $this->load->model("/InicioModel");
        if ($this->input->post()) {
            $usuario = $this->input->post('usuario');
            $password = $this->input->post('password');
            $this->validar_login();
            if ($this->form_validation->run() != false) {
                $valor = $this->InicioModel->ValidarUsuarioSistema($usuario, $password);
                if ($valor != null) {
                    $this->session->set_userdata('usuario_activo', 'true');
                    redirect('/Listado', 'refresh');
                } else {
                    $mensaje->respuesta = 'N';
                    $this->session->set_flashdata('msg', 'Usuario No Encontrado en Sistema', 3000);
                    redirect("/Login");
                }
            } else {
                $mensaje->respuesta = 'N';
                $this->session->set_flashdata('msg', validation_errors(), 3000);
                redirect("/Login");
            }
        } else {
            $mensaje->respuesta = 'N';
            $this->session->set_flashdata('msg', 'Error al Enviar', 3000);
            redirect("/Login");
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($mensaje));
    }

    private function validar_login()
    {
        $this->form_validation->set_rules("usuario", "Usuario", "required|min_length[4]|max_length[255]");
        $this->form_validation->set_rules("password", "Contraseña", "required|min_length[4]|max_length[255]");
        $this->form_validation->set_message('required', 'El %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El %s no cuenta con el minimo de caracteres');
        $this->form_validation->set_message('max_length', 'El %s supera el maximo de caracteres');
    }
}