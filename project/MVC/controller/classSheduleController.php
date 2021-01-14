<?php
        require('../model/classSheduleModel.php');
        session_start();
        $time="";
        $userId = $_SESSION['id'];
        $courseDetails=loadCourseDetails($userId);
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
            $day=$_POST["day"];
            $courseDetails=loadCourseDetails($userId);
            $i=0;
            while($rowx = $courseDetails->fetch_assoc()) {
                 if($rowx["day"]==$day && $i%2==0){
                    $time=$time." ".$rowx["time"];
                 }
                 $i++;
            }
            $courseDetails=loadCourseDetails($userId);
        }