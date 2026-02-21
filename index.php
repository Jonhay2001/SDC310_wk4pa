<?php 
require_once "config/database.php";
require_once "controllers/ProductController.php";

$db = (new Database())->connect();

$controller = new ProductController($db);
$products = $controller->index();

include "views/product_list.php";
?>