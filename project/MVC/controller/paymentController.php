<?php
        require('../model/paymentModel.php');
        session_start();
        $userId=$_SESSION['id'];
        $amount = $password= $due = $ans = "";
        $resx=checkdue($userId);
        $stat=false;
        while($res = $resx->fetch_assoc()) {
            if($res["status"]=="0"){
                $stat=true;
                $credit=loadCredit($userId);
                $creditSum=0;
                $i=0;
                while($row = $credit->fetch_assoc()) {
                    if($i%2!=1){
                        $creditSum=$creditSum+$row["credit"];
                    }
                    $i++;    
                }
                $due=$creditSum*5000;
            }
            else{
                $due="0";
            }
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ans="";

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

            if(!empty($_POST["amount"])){
                if($stat){
                    if($due==$_POST["amount"]){
                        if(updateStatus($userId)){
                            $ans = "Successful";
                        }
                        else{
                            $ans = "Failed";
                        }
                    }   
                    else{
                        $ans = "Amount Does not Match";
                    }
                } 
                else{
                    $ans = "Already Paid";
                }       
            }
            else{
                $ans = "This Field can not be Empty";
            }
         }