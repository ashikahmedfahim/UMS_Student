<?php
    require('../model/profileModel.php');
    $userId = $name = $cgpa = $status = "";
    session_start();
    $userId = $_SESSION['id'];
    $obj=loadProfile($userId);
    $name=$obj["name"];
    $cgpa=$obj["cgpa"];
    if($obj["status"]=="0"){
        $status="Not Paid";
    }
    else{
        $status="Paid";
    }
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
    }    