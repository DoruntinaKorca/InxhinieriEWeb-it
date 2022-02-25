<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cakes</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div id="registerContainer" class="registerBg">
      <form class="registerForm regSz"
       action="#" action="post">
       <div class="reg">
        <h2>Register now</h2>
        <div class="inputReg">
          <p>Full Name:</p>
          <input type="text" class="regInput" placeholder="Full name" id="fullname">
          <label for="fullname" id="fullNameError" class="errorInputReg"></label>

          <p>Username:</p>
          <input type="text" class="regInput" name="username" placeholder="Username" id="username">
          <label for="username" id="usernameError" class="errorInputReg"></label>

          <p>Email:</p>
          <input type="email" class="regInput" name="email" placeholder="Email" id="email">
          <label for="email" id="emailRegError" class="errorInputReg"></label>

          <p>Password:</p>
          <input type="password" class="regInput" name="password" placeholder="Password" id="password">
          <label for="password" id="passwordRegError" class="errorInputReg"></label>

          <button type="submit" id="regBtn">Register</button>
          
          <p id="alr">Already have an account? 
            <a href="Login.php">Sign in</a>
            </p>


        </div>
        
       </div>
      </form>
    </div>
    <script src="js/registerValidate.js"></script>
  </body>
</html>
