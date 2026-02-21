<?php 
require_once "models/Products.php";

class ProductController {
    private $product;

    public function __construct($db) {
        $this->product = new Product($db);
    }

    public function index() {
        return $this->product->getProducts();
    }
}
?>