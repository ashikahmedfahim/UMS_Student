
function validateForm(){
    var day = document.getElementById("day");
    var strUser = day.options[day.selectedIndex].value;
    document.getElementById("time").innerHTML=""; 
    console.log(strUser);
    if(strUser == "null"){
        document.getElementById("dayInfo").innerHTML="Day must be selected"; 
        document.getElementById("time").innerHTML="";  
        return false;
    }
    else{
        document.getElementById("dayInfo").innerHTML=""; 
        return true;
    }
}