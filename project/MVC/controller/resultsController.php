<?php
        require('../model/resultsModel.php');
        session_start();
        $gpa="";
        $userId = $_SESSION['id'];
        $courses=loadCourse($userId);
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
            $courseName=$_POST["course"];
            while($res = $courses->fetch_assoc()) {
                if($courseName==$res["name"]){
                    $gpa=$res["gpa"];
                    break;
                }
            }
            $courses=loadCourse($userId);
        }