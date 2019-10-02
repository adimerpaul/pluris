<?php
class Cprincipiante extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('cprincipiante');
        $this->load->view('templates/footer');
    }

}
