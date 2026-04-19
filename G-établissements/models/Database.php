<?php
class Database {
    private $host = "127.0.0.1";
    private $port = "3307";
    private $db_name = "tp_mvc";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>