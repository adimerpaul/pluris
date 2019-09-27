<?php
class Ainicial extends CI_Controller{
    function index(){
        $this->load->view('templates/header');
        $this->load->view('ainicial');
        $this->load->view('templates/footer');
    }

}
