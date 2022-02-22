var button = document.getElementById("confirmOrder");
var emriErr = document.getElementById("emriErr");
var numriErr = document.getElementById("numriErr");
var imellaErr = document.getElementById("imellaErr");
var adresaErr = document.getElementById("adresaErr");
button.addEventListener("click", (event) => {
  var emri = document.getElementById("emri").value;
  var imella = document.getElementById("imella").value;
  var numri = document.getElementById("numri").value;
  var adresa = document.getElementById("adresa").value;

  var shkronja = /^[A-Za-z]+$/;

  if(emri == "" || emri == null){
    emriErr.innerText = "Name cannot be null";
    event.preventDefault();
  }
   if (numri == "" || numri == null) {
    numriErr.innerText = "Phone number cannot be null";
    event.preventDefault();
  }
  else if(!numri.toString().match(/^[-]?\d*\.?\d*$/)){
    numriErr.innerText = "Phone number cannot contain letters";
    event.preventDefault(); 
  }

  if (imella == "" || imella == null) {
    imellaErr.innerText = "Email cannot be null";
    event.preventDefault();
  }
  else if(!imella.includes("@")){
    imellaErr.innerText = "Please include '@'";
  }
  

  if (adresa == "" || adresa == null) {
    adresaErr.innerText = "Address cannot be null";
    event.preventDefault();
  }
  
});