<?php
class Aprincipiante extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('aprincipiante');
        $this->load->view('templates/footer');
    }
}
