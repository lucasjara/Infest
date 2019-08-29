<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26-08-2019
 * Time: 2:16
 */

class Formulario extends CI_Controller
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
    public function RegistroUsuarios()
    {
        $mensaje = new stdClass();
        $this->load->model("/InicioModel");
        if ($this->input->post()) {
            $this->validar_usuario();
            if ($this->form_validation->run() != false) {
                $nombres = $this->input->post('nombre');
                $apellidos = $this->input->post('apellidos');
                $correo = $this->input->post('correo');
                $rut = $this->input->post('rut');
                $universidad = $this->input->post('universidad');
                $carrera = $this->input->post('carrera');
                $edad = $this->input->post('edad');
                $juego = $this->input->post('juego');
                // Validamos el rut tenga el Formato Correcto
                if ($this->valida_rut($rut)) {
                    // Validamos el Rut Este ya Registrado
                    $valor = $this->InicioModel->validar_rut($rut);
                    if ($valor == null) {
                        $datos = $this->InicioModel->ingresar_usuarios_tarreo($nombres, $apellidos, $correo, $rut, $universidad, $carrera, $edad, $juego);
                        if ($datos != null) {
                            $mensaje->respuesta = 'S';
                            $mensaje->data = $datos;
                        } else {
                            $mensaje->respuesta = 'N';
                            $mensaje->data = "Error al registrar.";
                        }
                    } else {
                        $mensaje->respuesta = 'N';
                        $mensaje->data = "El Rut ya se encuentra registrado.";
                    }
                } else {
                    $mensaje->respuesta = 'N';
                    $mensaje->data = "El Rut ingresado no es valido.";
                }
            } else {
                $mensaje->respuesta = 'N';
                $mensaje->data = validation_errors();
            }
        } else {
            $mensaje->respuesta = 'N';
            $mensaje->data = 'Error al Enviar';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($mensaje));
    }

    private function validar_usuario()
    {
        $this->form_validation->set_rules("nombre", "Nombre", "required|max_length[255]");
        $this->form_validation->set_rules("apellidos", "Apellidos", "required|max_length[255]");
        $this->form_validation->set_rules("juego", "Juego Favorito", "required|max_length[255]");
        $this->form_validation->set_rules("correo", "Correo", "required|max_length[255]");
        $this->form_validation->set_rules("rut", "Rut", "required|max_length[255]");
        $this->form_validation->set_rules("universidad", "Universidad / Liceo", "required|max_length[255]");
        $this->form_validation->set_rules("carrera", "Carrera / Curso", "required|max_length[255]");
        $this->form_validation->set_rules("edad", "Edad", "required|is_numeric");
        $this->form_validation->set_message('required', 'El %s es obligatorio');
        $this->form_validation->set_message('is_numeric', 'La %s que ingreso debe ser numerico');
    }
    private function valida_rut($rut)
    {
            $rut = preg_replace('/[^k0-9]/i', '', $rut);
            $dv = substr($rut, -1);
            $numero = substr($rut, 0, strlen($rut) - 1);
            $i = 2;
            $suma = 0;
            foreach (array_reverse(str_split($numero)) as $v) {
                if ($i == 8) {
                    $i = 2;
                }
                $suma += $v * $i;
                ++$i;
            }
            $dvr = 11 - ($suma % 11);
            if ($dvr == 11) {
                $dvr = 0;
            }
            if ($dvr == 10) {
                $dvr = 'K';
            }
            if ($dvr == strtoupper($dv)) {
                return true;
            } else {
                return false;
            }

    }
}