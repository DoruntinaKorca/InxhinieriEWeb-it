var button = document.getElementById("loginBtn");
var emailError = document.getElementById("emailError");
var passwordError = document.getElementById("passwordError");

button.addEventListener("click", (event) => {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email == "" || email == null) {
    emailError.innerText = "email cannot be empty";
    event.preventDefault();
  }
  else if(!email.includes("@")){
    emailError.innerText = "Please include '@'";
    event.preventDefault();
  }
  if (password == "" || password == null) {
    passwordError.innerText = "password cannot be empty";
    event.preventDefault();
  }
  else if(password.length > 10 || password < 4){
      passwordError.innerText = "password should be between 4 to 10 characters long";
      event.preventDefault();
  }
});

