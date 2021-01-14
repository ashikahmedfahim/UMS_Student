<?php
        require('../model/loginModel.php');
        $id = $password = '';
        $idInfo = $passwordInfo = $loginInfo = "";
        $idF = $passwordF = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["id"])) {
            $idInfo = "This field can not be empty";
        }
        else{
            $id=$_POST["id"];
            $idF=true;
        }
        if (empty($_POST["password"])) {
            $passwordInfo = "This field can not be empty";
        }
        else{
            $password=$_POST["password"];
            $passwordF=true;
        }
        if($idF==true && $passwordF==true){

            if(login($id, $password)){
                session_start();
                $_SESSION['id']=$id;
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/project/MVC/view/home.php',true,303);
                exit;
            }
            else{
                $loginInfo = "User Id or Passsword does not match";
            }
            
        } 
    }
?>
