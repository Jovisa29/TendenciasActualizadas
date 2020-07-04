<?php
require_once "libs/database.php";
require_once "libs/controller.php";
require_once "libs/view.php";
require_once "libs/model.php";
require_once "libs/app.php";
require_once "config/config.php";
include_once 'includes/user.php';
include_once 'includes/user_session.php';

//$app = new App();
$userSession = new User_Session();
$user = new User();
//
//include_once 'views/principal/principal.php';
if(isset($_SESSION['user'])){
    $app = new App();
}elseif(isset($_POST['usu']) && isset($_POST['password'])){
    $userForm =$_POST['usu'];
    $passForm =$_POST['password'];
    if($user->userExist($userForm,$passForm)){
       $userSession->setCurrentUser($userForm);
       $user->setUser($userForm);
        $app = new App();
    }else{
        $errorlogin = "Verifique sus Credenciales";
        include_once 'views/menu/login.php';
    }       
    
}else{
   
    include_once 'views/menu/login.php';
    
elseif(isset($_POST['usu']) && isset($_POST['password'])){
    $userForm =$_POST['usu'];
    $passForm =$_POST['password'];
    if($user->userExist($userForm,$passForm)){
       $userSession->setCurrentUser($userForm);
       $user->setUser($userForm);
        $app = new App();
}
?>