<?php
    function loadFacultyDetails($userId){
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
                $sql1 = "SELECT teacher.name,teacher.freeTime,courseTeacher.tid,student.id FROM student LEFT JOIN coursestudent ON coursestudent.sid = '".$id."' LEFT JOIN courseTeacher ON courseTeacher.cid = coursestudent.cid LEFT JOIN teacher ON teacher.id = courseTeacher.tid ";
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