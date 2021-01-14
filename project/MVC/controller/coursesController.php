<?php
        require('../model/coursesModel.php');
        session_start();
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
        }