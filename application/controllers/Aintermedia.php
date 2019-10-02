<?php
class Aintermedia extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('aintermedia');
        $this->load->view('templates/footer');
    }
}
