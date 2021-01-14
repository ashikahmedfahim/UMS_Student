<?php
    function loadCourse($userId){
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
                $sql1 = "SELECT course.name,student.id FROM student LEFT JOIN coursestudent ON coursestudent.sid = '".$id."' LEFT JOIN course ON course.id = coursestudent.cid";
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
    function loadBookName($name){
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

        $sql = "SELECT bookName FROM course WHERE name='".$name."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
            $conn->close();
        }
        else {
            $conn->close();
        } 
    }