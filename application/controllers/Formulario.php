<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26-08-2019
 * Time: 2:16
 */

class Formulario extends CI_Controller
{
    public function index()
    {
        $this->layout->setLayout("plantilla");
        $this->layout->view('vista');
    }
}