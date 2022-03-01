<?php
include_once '../repositories/contactuserRepository.php';
include_once '../models/contactuser.php';

if(isset($_POST['contact_Btn'])){
    if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) ||
    empty($_POST['phone']) || empty($_POST['message'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $id = rand(100,999).$name;
    
        $contactuser = new ContactUser($id,$name,$lastname,$email,$phone,$message);
        $contactuserRepository = new ContactUserRepository();
        $contactuserRepository->insertUser($contactuser);
        echo "$name $lastname has been inserted";
    }
}


?>












