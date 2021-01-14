<?php
        require('../model/loginModel.php');
        require('../model/changePasswordModel.php');
        $currentPassword = $newPassword = $confirmPassword = $updatePassword = '';
        $currentPasswordInfo = $newPasswordInfo = $confirmPasswordInfo = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['back'])) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/project/MVC/view/home.php',true,303);
            exit;
        }
        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/project/MVC/view/login.php',true,303);
            exit;
        }

        if (empty($_POST["currentPassword"])) {
            $currentPasswordInfo = "This field can not be empty";
        }
        else{
            $currentPassword=$_POST["currentPassword"];
        }
        if (empty($_POST["newPassword"])) {
            $newPasswordInfo = "This field can not be empty";
        }
        else{
            $newPassword=$_POST["newPassword"];
        }
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordInfo = "This field can not be empty";
        }
        else{
            $confirmPassword=$_POST["confirmPassword"];
            if (!empty($_POST["newPassword"])) {
                $val=strcmp($newPassword,$confirmPassword);
                if($val==0){
                    $confirmPassword=$_POST["confirmPassword"]; 
                }
                else{
                    $confirmPasswordInfo = "Password do not match, Please Re-enter"; 
                    $confirmPassword='';      
                }  
            }
            else{
                $confirmPassword=$_POST["confirmPassword"];   
            }
                                
        }
        session_start();
        $userId=$_SESSION['id'];
        if(login($userId, $currentPassword)){
            if(changePassword($userId,$newPassword) ){
                $updatePassword = "Succesful"; 
            }
            else{
                $updatePassword = "Please, Try again"; 
            }
        }
        else{
            $updatePassword = "Current password does not match";
        }
        
                        
    }
?>
