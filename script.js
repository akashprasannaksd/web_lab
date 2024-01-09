
function validateForm(){
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    console.log(password1);
    console.log(password2);

    if (password1 == password2){
        return true;
    
    }
    else{
        alert ("Password doesnot match");
        return false;
    }
}
