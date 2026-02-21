<?php
class Database {
    private $host = "localhost";
    private $db = "sdc310_wk4pa";
    private $user = "root";
    private $pass = "";

    public function connect() {
        try{
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db};charset=utf8",
                $this->user,
                $this->pass
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>