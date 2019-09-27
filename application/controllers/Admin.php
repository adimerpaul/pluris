<?php
class Admin extends CI_Controller{
function index(){
    $this->load->view('templates/header');
    $this->load->view('admin');
    $this->load->view('templates/footer');
}
function login(){
    $user=$_POST['user'];
    $clave=$_POST['clave'];
    if ( $clave=='sisinf'){
        $_SESSION['user']=$user;
        header('Location: '.base_url());
    }else{
        header('Location: '.base_url()).'Admin';
    }
}
public function logout()
{
    session_destroy();
    header('Location: '.base_url());
}
}
