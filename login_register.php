<?php
require_once "bootstrap.php" ;

    if(isset($_SESSION['loggedUser']))
    {
      header ("Location:index.php");
    }
 if(isset($_POST['Register_Btn'])){

    $user->insertUser();

 }
 if(isset($_POST['Login_Btn'])){

   $user->loginUser();

}
require "view/login_register.view.php";





 ?>