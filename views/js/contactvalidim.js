
var contactBtn = document.getElementById("btn_contact");
var nameError = document.getElementById("nameError");
var lastnameError = document.getElementById("lastnameError");
var emailError = document.getElementById("emailError");
var phoneError = document.getElementById("phoneError");
var messageError = document.getElementById("messageError");

contactBtn.addEventListener("click", (e) => {
    var name = document.getElementById("name").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value; 


    if(name == '' || name == null){
      nameError.innerText = "Name is required";
        e.preventDefault();
    }
    else if
    (name.match(/^\d/)){
      nameError.innerText = "Your name can't start with a number.";
        e.preventDefault();
    }else{
      nameError.innerText = "";
    }

    if(lastname == '' || lastname == null){
      lastnameError.innerText = "Lastname is required";
        e.preventDefault();
    }
    else if
    (lastname.match(/^\d/)){
      lastnameError.innerText = "Lastname can't start with a number.";
        e.preventDefault();
    }else{
      lastnameError.innerText = "";
    }  

    if (email == "" || email == null) {
      emailError.innerText = "Email cannot be empty!";
        e.preventDefault();
    }
    else if(!email.match( /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
      emailError.innerText = "Your email is invalid!";
        e.preventDefault();
    }else{
      emailError.innerText = "";
    }  
    
    if (phone == "" || phone == null) {
      phoneError.innerText = "Phone cannot be empty!";
        e.preventDefault();
    }
    else if(!phone.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)){
      phoneError.innerText = "Your phone is invalid!";
        e.preventDefault();
    }else{
      phoneError.innerText = "";
    }  

    if (message == "" || message == null) {
      messageError.innerText = "Message cannot be empty!";
        e.preventDefault();
    }
    else{
      messageError.innerText = "";
    }  
  
});








/*


const isValidEmail = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  };
  
  const isValidPhone = (phone) => {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(phone).toLowerCase());
  };
  
  //const btn = document.getElementById("btn_contact");
  const form = document.querySelector('form');
  const thankYou = document.querySelector(".thank-you");
  const nameInput = document.querySelector('input[name="name"]');
  const lastnameInput = document.querySelector('input[name="lastname"]');
  const emailInput = document.querySelector('input[name="email"]');
  const phoneInput = document.querySelector('input[name="phone"]');
  const messageInput = document.querySelector('textarea[name="message"]');
  
  const inputs = [nameInput, lastnameInput, emailInput, phoneInput, messageInput];
  
  let isFormValid = false;
  let isValidationOn = false;
  
  const resetElm = (elm) => {
    elm.classList.remove('invalid');
    elm.nextElementSibling.classList.add("hidden");
  };
  
  const invalidateElm = (elm) => {
    elm.classList.add("invalid");
    elm.nextElementSibling.classList.remove("hidden");
  };
  
  const validateInputs = () => {
    if (!isValidationOn) return;
  
    isFormValid = true;
    inputs.forEach(resetElm);
  
    if (!nameInput.value){
      isFormValid = false;
      invalidateElm(nameInput);
    }
  
    if (!lastnameInput.value){
      isFormValid = false;
      invalidateElm(lastnameInput);
    }
  
    if (!isValidEmail(emailInput.value)) {
      isFormValid = false;
      invalidateElm(emailInput);
    }
  
    if (!isValidPhone(phoneInput.value)) {
      isFormValid = false;
      invalidateElm(phoneInput);
    }
  
    if (!messageInput.value) {
      isFormValid = false;
      invalidateElm(messageInput);
    }
  
  }

 form.addEventListener("submit", (event) => {
      event.preventDefault();
      isValidationOn = true;
      validateInputs();
         
     if (isFormValid){
       form.remove();
       thankYou.classList.remove('hidden');
     }
  });  
  
  inputs.forEach((input) => {
    input.addEventListener("input", () => {
      validateInputs();
    });
  });

*/



