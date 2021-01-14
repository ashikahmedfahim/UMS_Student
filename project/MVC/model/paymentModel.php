<?php

    function checkDue($userId){
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

        $sql = "SELECT status FROM student WHERE userId='".$userId."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $conn->close();
            return $result;
        } 
        else {
            $conn->close();
            return false; 
        }
    }

    function loadCredit($userId){
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

        $sql = "SELECT id FROM student WHERE userId='".$userId."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
                $row = $result->fetch_assoc();
                $id=$row["id"];            
                $sql1 = "SELECT course.credit,student.id FROM student LEFT JOIN coursestudent ON coursestudent.sid = '".$id."' LEFT JOIN course ON course.id = coursestudent.cid";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                    return $result1;
                }
                else{
                    echo "Error";
                }
                $conn->close();
        }
        else {
            $conn->close();
        } 
    }

    function login($userId, $password){
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

        $sql = "SELECT id FROM student WHERE userId='".$userId."'AND password= '".$password."' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $conn->close();
            return true;
        } 
        else {
            $conn->close();
            return false; 
        }
    }

    function updateStatus($userId){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ums";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }
        $x=1;
        $sql = "UPDATE student SET status='".$x."' WHERE userId='".$userId."'";
    
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
        echo "Error updating record: " . $conn->error;
        }
    
        $conn->close();
    }