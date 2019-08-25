<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        $this->layout->setLayout("plantilla");
        $this->layout->view('vista');
	}
}
