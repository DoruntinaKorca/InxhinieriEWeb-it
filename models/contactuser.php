<?php

class ContactUser{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $phone;
    private $message;

    function __construct($id,$name,$lastname,$email,$phone,$message){
        $this->id=$id;
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->phone=$phone;
        $this->message=$message;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }
    function getMessage(){
        return $this->message;
    }
} 
 
?>