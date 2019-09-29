<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 06-05-2018
 * Time: 1:11
 */

class InicioModel extends CI_Model
{
    public function validar_rut($rut)
    {
        $this->db->select("*")
            ->from('tb_usuarios_infest usuarios')
            ->where("usuarios.RUT", $rut);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }
    public function validar_rut_workshops($rut,$tipo)
    {
        $this->db->select("*")
            ->from('tb_usuarios_workshops usuarios')
            ->where("usuarios.RUT", $rut)
            ->where("usuarios.TIPO", $tipo);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    public function ingresar_usuarios_tarreo($nombres, $apellidos, $correo, $rut, $universidad, $carrera, $edad, $juego) {
        $this->db->set('NOMBRE', strtoupper($nombres));
        $this->db->set('APELLIDOS', strtoupper($apellidos));
        $this->db->set('RUT', strtoupper($rut));
        $this->db->set('CORREO', strtoupper($correo));
        $this->db->set('UNIVERSIDAD', strtoupper($universidad));
        $this->db->set('CARRERA', strtoupper($carrera));
        $this->db->set('EDAD', $edad);
        $this->db->set('JUEGO', strtoupper($juego));
        $this->db->insert("tb_usuarios_infest");
        return $this->db->insert_id();
    }
    public function ingresar_usuarios_workshop($nombres, $apellidos, $correo, $rut,$tipo) {
        $this->db->set('NOMBRE', strtoupper($nombres));
        $this->db->set('APELLIDOS', strtoupper($apellidos));
        $this->db->set('RUT', strtoupper($rut));
        $this->db->set('CORREO', strtoupper($correo));
        $this->db->set('TIPO', $tipo);
        $this->db->insert("tb_usuarios_workshops");
        return $this->db->insert_id();
    }
    public function ValidarUsuarioSistema($usuario,$password)
    {
        $this->db->select("*")
            ->from('tb_usuarios_sistema')
            ->where("USUARIO", $usuario)
            ->where("PASSWORD", $password)
            ->where("ACTIVO", "S");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }
    public function ObtenerListadoUsuarios(){
        $this->db->select("ID,NOMBRE,APELLIDOS,RUT,CORREO,EDAD,FECHA")
            ->from('tb_usuarios_infest usuarios')
        ->order_by('fecha DESC');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }
    public function ObtenerListadoUsuariosNotificar(){
        $this->db->select("ID,NOMBRE,APELLIDOS,RUT,CORREO,EDAD,FECHA")
            ->from('tb_usuarios_infest usuarios')
            ->where("NOTIFICACION", "N")
            ->order_by('fecha DESC');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : null;
    }
}