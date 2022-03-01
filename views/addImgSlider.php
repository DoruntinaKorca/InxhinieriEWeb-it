
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
    <h2 >Add Slider</h2>
   
     
      <form action="" method="POST" class="editUser" enctype="multipart/form-data">
       
        
        <label for="">title: </label>
        <input type="text" name="slider_title" value="" class="klv"> 

        <label for="">image: </label> <br>
        <input type="file" name="slider_img" value="" > 
        <br><br>
     
        
        <input type="submit" name="saveImgSlider" value="save" class="klv kb">
</form>
<?
     include '../controllers/imgSliderController.php';
     ?>
 
    </div>
   

</body>
</html>
