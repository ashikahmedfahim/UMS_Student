
function validateForm(){
    var course = document.getElementById("course");
    var strUser = course.options[course.selectedIndex].value;
    if(strUser == "null"){
        document.getElementById("courseInfo").innerHTML="Course must be selected"; 
        document.getElementById("gpa").innerHTML="";  
        return false;
    }
    else{
        document.getElementById("courseInfo").innerHTML=""; 
        return true;
    }
}