
function validateForm(){
    var amount = document.getElementById("amount").value;
    document.getElementById("Info").innerHTML="";
    if(amount == "" ){
        document.getElementById("amountInfo").innerHTML="This field can not be empty";
    }
    else{
        document.getElementById("idInfo").innerHTML=""; 
    }
    if(amount == ""){
        return false;
    }
    else{
        return true;
    }
}