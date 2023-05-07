<?php 

class AuthController extends Auth{
 
    public function form_login(){
         $title = 'Iniciar sesion';
         require_once('./views/all/header.php');
         require_once('./views/auth/form_login.php');
    }
    public function login(){
        $correo = $_POST['email'];
        $password = $_POST['password'];
        $user = parent::auth($correo);
        if($user->password == $password){
             $_SESSION['USER'] = $user;
             header('location:?c=incidents&m=index');
        } else{
            header('location:?c=auth&m=form_login');
        }
    }
    public function form_register(){

    }
    public function register(){

    }
    public function logout(){
        unset($_SESSION['USER']);
        session_destroy();
        header('location:?c=auth&m=form_login');
    }
   

}