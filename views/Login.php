<?
session_start();

?>

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
    <div id="registerContainer" class="loginBg">
      <form class="registerForm logSz" method="post"   id="loginForm">
        <div class="reg logp">
          <h2>Sign in</h2>
          <p>Email:</p>
          <input type="email" name="email"placeholder="Email" id="email" />
          <label for="email" id="emailError" class="errorInput"></label>
          <p>Password:</p>
          <input type="password" name="password" placeholder="Password" id="password" />
          <label for="password" id="passwordError" class="errorInput"></label>
          <button type="submit" name="loginButton" value="login" id="loginBtn">Login</button>
          <p id="alrlog">
            Don't have an account?
            <a href="Register.php">Sign up</a>
          </p>
        </div>
      </form>
      <?
     include '../controllers/accountController.php';
     ?>
    </div>
    <script src="js/loginValidate.js"></script>
  </body>
</html>
