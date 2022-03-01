<?php 

include_once '../repositories/orderRepository.php';
include_once '../models/order.php';    


if(isset($_POST['confirmBtn']))
{

        if(empty($_POST['name']) || empty($_POST['phoneNumber']) || empty($_POST['email']) || empty($_POST['address'])){
            echo "Please fill all fields!";
        
    }else{
        $name=$_POST['name'];
        $phoneNumber=$_POST['phoneNumber'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        

        $order = new Order($name, $phoneNumber, $email, $address);
        $orderRepository=new OrderRepository();
        $orderRepository->insertOrder($order);

        }
    }
    
?>