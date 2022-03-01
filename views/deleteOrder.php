<?php

include_once '../repositories/orderRepository.php';
$Id = $_GET['Id'];
$orderRepository = new OrderRepository();

$orderRepository->deleteOrderById($Id);

header("location:manageOrders.php");
?>