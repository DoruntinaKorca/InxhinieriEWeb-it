<?php

include_once '../repositories/contactuserRepository.php';
$id = $_GET['id'];
$contactuserRepository = new ContactUserRepository();

$contactuserRepository->deleteUserById($id);

header("location:contactdashboard.php");
?>