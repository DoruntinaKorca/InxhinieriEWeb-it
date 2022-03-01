<?
 
session_start(); 
if(!isset($_SESSION['username'])){
  header("location:Login.php");
}
else{
   
?>
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
    include 'includes/adminHeader.php';
    ?>

    <div class="adminMainContent">
    <h2 >Manage Users</h2>
    <br><br>
    
        <table class="tbl-full">
            <tr >
                <th >Id</th>
                <th>fullname</th>
                <th>username</th>
                <th>email</th>
                <th>Actions</th>
            </tr>
            <?
           
            include "../repositories/userRepository.php";
            $userRepository = new userRepository();
            $users = $userRepository->getAllUsers();

            foreach($users as $user){
                echo " <tr >
                <td>$user[users_id]</td>
                <td>$user[fullname]</td>
                <td>$user[username]</td>
                <td>$user[email]</td>
                <td>
                    <a href=\"editUser.php?id=$user[users_id]\" class=\"butoniGreen\">Edit</a>
                    <a href=\"deleteUser.php?id=$user[users_id]\" class=\"butoniRed\">Delete</a>
                </td>
            </tr>  ";
            }
            ?>
            
        </table>

      
    </div>
    <?
    include 'includes/adminFooter.php';
    ?>

   
</body>
</html>
<?
}
?>