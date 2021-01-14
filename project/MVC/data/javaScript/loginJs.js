
function validateForm(){
    var id = document.getElementById("id").value;
    var password = document.getElementById("password").value;
    document.getElementById("loginInfo").innerHTML="";
    if(id == "" || password == ""){
        if(id == "" ){
            document.getElementById("idInfo").innerHTML="This field can not be empty";
        }
        else{
            document.getElementById("idInfo").innerHTML=""; 
        }
        if(password == ""){
            document.getElementById("passwordInfo").innerHTML="This field can not be empty";
        }
        else{
            document.getElementById("passwordInfo").innerHTML="";
        }
        return false;
    }
    else{
        return true;
    }
}