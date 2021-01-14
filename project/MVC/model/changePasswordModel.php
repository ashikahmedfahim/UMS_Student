<?php

    function changePassword($userId,$password){
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "ums";

        // Create connection
        $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE student SET password='".$password."' WHERE userId='".$userId."'";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
        echo "Error updating record: " . $conn->error;
            return false;
        }

        $conn->close();
    }