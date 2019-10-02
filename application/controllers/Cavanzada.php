<?php
class Cavanzada extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('cavanzada');
        $this->load->view('templates/footer');
    }

}
