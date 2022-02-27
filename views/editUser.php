
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?
    include 'adminHeader.php';
    ?>

    <div class="adminMainContent">
    <h2 >Edit Users</h2>
    
    <?php
include_once '../controllers/userController.php';

?>
     
      <form action="" method="POST" class="editUser">
      <label for="">Id: </label>
        <input type="text" name="users_id" value="<?=$user['users_id']?>" class="klv" readonly> 
        <label for="">fullname: </label>
        <input type="text" name="fullname" value="<?=$user['fullname']?>" class="klv"> 
        <label for="">username: </label>
        <input type="text" name="username" value="<?=$user['username']?>" class="klv"> 
        <label for="">email: </label>
        <input type="text" name="email" value="<?=$user['email']?>" class="klv"> 
        <label for="">password: </label>
        <input type="text" name="password" value="<?=$user['password']?>" class="klv">
      

        <input type="submit" name="save" value="save" class="klv kb">
</form>

    </div>
   

</body>
</html>
