<?php
class Bavanzada extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('Bavanzada');
        $this->load->view('templates/footer');
    }

}
