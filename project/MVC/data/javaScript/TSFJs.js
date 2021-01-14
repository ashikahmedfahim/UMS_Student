
function validateForm(){
    var faculty = document.getElementById("faculty");
    var strUser = faculty.options[faculty.selectedIndex].value;
    console.log(strUser);
    document.getElementById("freeTime").innerHTML="";  
    if(strUser == "null"){
        document.getElementById("facultyInfo").innerHTML="Faculty must be selected";  
        document.getElementById("freeTime").innerHTML="";  
        return false;
    }
    else{
        document.getElementById("facultyInfo").innerHTML=""; 
        return true;
    }
}