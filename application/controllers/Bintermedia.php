<?php
class Bintermedia extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('bintermedia');
        $this->load->view('templates/footer');
    }

}
