
    function validateForm(){
        var currentPassword = document.getElementById("currentPassword").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value; 
        document.getElementById("updatePassword").innerHTML="";
        if(currentPassword == "" ){
            document.getElementById("currentPasswordInfo").innerHTML="This field can not be empty";
        }
        else{
            document.getElementById("currentPasswordInfo").innerHTML=""; 
        }
        if(newPassword == ""){
            document.getElementById("newPasswordInfo").innerHTML="This field can not be empty";
        }
        else{
            document.getElementById("newPasswordInfo").innerHTML="";
        }
        if(confirmPassword == ""){
            document.getElementById("confirmPasswordInfo").innerHTML="This field can not be empty";
        }
        else{
            document.getElementById("confirmPasswordInfo").innerHTML="";    
        }
        if(currentPassword == "" || newPassword == "" || confirmPassword == ""){
            return false;
        }
        else{
            if(newPassword == confirmPassword){
                document.getElementById("confirmPasswordInfo").innerHTML = "";
                return true;
            }
            else{
                document.getElementById("confirmPasswordInfo").innerHTML = "Password do not match, Please Re-enter";
                return false;
            }
        } 
           
    }