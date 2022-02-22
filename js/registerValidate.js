var regButton = document.getElementById("regBtn");
var fullNameError = document.getElementById("fullNameError");
var regUsernameError = document.getElementById("usernameError");
var emailRegError = document.getElementById("emailRegError");
var passwordRegError = document.getElementById("passwordRegError");

regButton.addEventListener("click",(e) =>{
    var fullname = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(fullname == '' || fullname == null){
        fullNameError.innerText = "Full name cannot be empty";
        e.preventDefault();
    }
    else if
    (fullname.match(/^\d/)){
        fullNameError.innerText = "your Full name can't start with a number";
        e.preventDefault();
    }
    
    if(username== '' || username==null){
        regUsernameError.innerText = "Username cannot be empty";
        e.preventDefault();
    }
    else if(username.length > 10 || username.length <4){
        regUsernameError.innerText = "Username should be between 4 to 10 characters";
        e.preventDefault();
    }

    if (email == "" || email == null) {
        emailRegError.innerText = "email cannot be empty";
        e.preventDefault();
      }
      else if(!email.includes("@")){
        emailRegError.innerText = "Please include '@'";
        e.preventDefault();
      }
      if (password == "" || password == null) {
        passwordRegError.innerText = "password cannot be empty";
        e.preventDefault();
      }
})