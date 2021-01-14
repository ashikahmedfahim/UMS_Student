<?php
    session_start();
    $userId=$_SESSION['id'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['logout'])) {
            session_destroy();
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/project/MVC/view/login.php',true,303);
            exit;
        }
    }                 
?>