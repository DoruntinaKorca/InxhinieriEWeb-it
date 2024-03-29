
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
      method="post" action="<?=$_SERVER['PHP_SELF']?>">
       <div class="reg">
        <h2>Register now</h2>
        <div class="inputReg">
        
          <p>Full Name:</p>
          <input type="text" name="fullname" class="regInput" placeholder="Full name" id="fullname">
     
          <label for="fullname" id="fullNameError" class="errorInputReg"></label>

          <p>Username:</p>
          <input type="text" name="username" class="regInput"  placeholder="Username" id="username">
          <label for="username"  id="usernameError" class="errorInputReg"></label>

          <p>Email:</p>
          <input type="email" name="email" class="regInput"  placeholder="Email" id="email">
          <label for="email" name="emailErr" id="emailRegError" class="errorInputReg">
         

          </label>

          <p>Password:</p>
          <input type="password" name="password" class="regInput"  placeholder="Password" id="password">
          <label for="password" id="passwordRegError" class="errorInputReg">
          
          </label>

          

          <button type="submit" name="registerBtn" value="register" id="regBtn">Register</button>
          
          <p id="alr">Already have an account? 
            <a href="Login.php">Sign in</a>
            </p>


        </div>
        
       </div>
      </form>
     <?
     include '../controllers/accountController.php';
     ?>
    </div>
    <script src="js/registerValidate.js"></script>
  </body>
</html>
