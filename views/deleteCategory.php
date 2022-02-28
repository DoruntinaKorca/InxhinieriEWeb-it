<?php

include_once '../repositories/categoryRepository.php';
$category_id = $_GET['category_id'];
$categoryRepository = new categoryRepository();

$categoryRepository->deleteCategoryById($category_id);

header("location:manageCategory.php");
?>