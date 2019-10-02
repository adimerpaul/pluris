<?php
class Aavanzada extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('aavanzada');
        $this->load->view('templates/footer');
    }
}
