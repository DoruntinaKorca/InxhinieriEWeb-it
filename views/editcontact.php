<?php
include_once '../repositories/contactuserRepository.php';

$userId = $_GET['id'];

$contactuserRepository = new ContactUserRepository();

$contactuser = $contactuserRepository->getUserById($userId);

?>

<form action="" method="POST">
        <input type="text" name="id" value="<?=$contactuser['Id']?>" readonly> <br><br>
        <input type="text" name="name" value="<?=$contactuser['Name']?>"> <br><br>
        <input type="text" name="lastname" value="<?=$contactuser['Lastname']?>"> <br><br>
        <input type="text" name="email" value="<?=$contactuser['Email']?>"> <br><br>
        <input type="text" name="phone" value="<?=$contactuser['Phone']?>"> <br><br>
        <input type="text" name="message" value="<?=$contactuser['Message']?> "> <br><br>
        

        <input type="submit" name="save" value="save"> <br><br>
</form>

<?php 
if(isset($_POST['save'])){
    $id = $userId;
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $contactuserRepository->updateUser($id,$name,$lastname,$email,$phone,$message);
    header("location:contactdashboard.php");
}

?>