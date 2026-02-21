<?php 
class Product {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getProducts() {
        $sql = "SELECT * FROM products";
        return $this->conn->query($sql);
    }
}
?>