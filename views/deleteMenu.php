<?php

include_once '../repositories/menuRepository.php';
$menu_id = $_GET['menu_id'];
$menuRepository = new menuRepository();

$menuRepository->deleteMenuById($menu_id);

header("location:manageCakes.php");
?>