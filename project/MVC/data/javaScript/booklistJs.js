
function validateForm(){
    var course = document.getElementById("course");
    var strUser = course.options[course.selectedIndex].value;
    console.log(strUser);
    if(strUser == "null"){
        document.getElementById("courseInfo").innerHTML="Course must be selected";  
        document.getElementById("bookName").innerHTML="";  
        return false;
    }
    else{
        document.getElementById("courseInfo").innerHTML=""; 
        return true;
    }
}