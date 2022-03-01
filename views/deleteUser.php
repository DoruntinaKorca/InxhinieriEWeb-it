
<?php


include_once '../repositories/userRepository.php';
$users_id = $_GET['id'];
$userRepository = new UserRepository();

$userRepository->deleteUserById($users_id);

header("location:manageUsers.php");
?>