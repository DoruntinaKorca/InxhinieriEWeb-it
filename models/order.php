<?php

class Order{

    private $name;
    private $phoneNumber;
    private $email;
    private $address;
  


    function __construct($name,$phoneNumber,$email,$address){
        
        $this->name=$name;
        $this->phoneNumber=$phoneNumber;
        $this->email=$email;
        $this->address=$address;
       

    }
    function getName(){
        return $this->name;
    }
    function getPhoneNumber(){
        return $this->phoneNumber;
    }
    function getEmail(){
        return $this->email;
    }
    function getAddress(){
        return $this->address;
    }
}
?>