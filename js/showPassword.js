function show_change_password(){
    let password=document.getElementById("password");
    let password2=document.getElementById("password1");
    if(password.type==="password" || password2.type==="password"){
        password.type="text";
        password2.type="text";
    }else{
        password.type="password";
        password2.type="password";
    }
}

function show_signup_password(){
    let password=document.getElementById("password");
    if(password.type==="password"){
        password.type="text";
       
    }else{
        password.type="password";
    
    }
}
function show_password(){
    let password=document.getElementById("mypass");
    if(password.type==="password"){
        password.type="text";
    }else{
        password.type="password";
    }
}