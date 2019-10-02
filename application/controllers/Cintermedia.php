<?php
class Cintermedia extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('cintermedia');
        $this->load->view('templates/footer');
    }

}
