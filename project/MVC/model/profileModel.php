<?php
        function loadProfile($userId){
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
        
        
            $sql = "SELECT userId,name,cgpa,status FROM student WHERE userId='".$userId."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
                $row = $result->fetch_assoc();
                return $row;
                $conn->close();
            } 
            else {
                echo "0 results";
                $conn->close();
            }
        }