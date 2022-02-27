<?php
include '../repositories/userRepository.php';
$users_id = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($users_id);

if(isset($_POST['save'])){
    $id = $users_id;
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $userRepository->updateUser($id,$fullname,$username,$email,$password);
    header("location:manageUsers.php");
}

?>