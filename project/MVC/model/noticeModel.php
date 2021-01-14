<?php
        function loadnotice(){
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
        
        
            $sql = "SELECT * FROM notice";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
                return $result;
                $conn->close();
            } 
            else {
                $conn->close();
            }
        }