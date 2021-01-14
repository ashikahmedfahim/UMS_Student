<?php
        require('../model/TSFModel.php');
        session_start();
        $freeTime="";
        $userId = $_SESSION['id'];
        $facultyDetails=loadFacultyDetails($userId);
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
            $facultyName=$_POST["faculty"];
            $facultyDetails=loadFacultyDetails($userId);
            while($rowx = $facultyDetails->fetch_assoc()) {
                if($rowx["name"]==$facultyName){
                    $freeTime=$rowx["freeTime"];
                }
            }
            $facultyDetails=loadFacultyDetails($userId);
        }