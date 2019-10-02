<?php
class Aavanzada extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('Aavanzada');
        $this->load->view('templates/footer');
    }
}
