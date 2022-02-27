
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
    <h2 >Add Menu</h2>
   
     
      <form action="" method="POST" class="editUser">
      <label for="">Id: </label>
        <input type="text" name="" value="" class="klv" readonly> 
        <label for="">fullname: </label>
        <input type="text" name="" value="" class="klv"> 
        <label for="">username: </label>
        <input type="text" name="" value="" class="klv"> 
        <label for="">email: </label>
        <input type="text" name="" value="" class="klv"> 
        <label for="">password: </label>
        <input type="text" name="" value="" class="klv">
      

        <input type="submit" name="saveMenu" value="save" class="klv kb">
</form>

    </div>
   

</body>
</html>
