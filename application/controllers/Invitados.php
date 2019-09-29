<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29-09-2019
 * Time: 1:16
 */

class Invitados extends CI_Controller
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
}