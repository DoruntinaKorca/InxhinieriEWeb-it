<?
class User{
    private $users_id;
    private $fullname;
    private $username;
    private $email;
    private $password;
    private $role;
    function __construct($fullname,$username,$email,$password,$role){
       // $this->users_id = $users_id;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role=$role;
    }
/*
    function getUsers_id(){
        return $this->users_id;
    } */
    function getFullname(){
        return $this->fullname;
    }
    function getUsername(){
        return $this->username;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
}
?>