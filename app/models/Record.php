<?php
// TURATSINZE DOMINIQUE| REGNO:25/30642 | ROLE:BACKEND PHP MVC ENGINEER

require_once __DIR__ . '/../../config/db.php';

class Record {
    private $db;

    public function __construct() {
        $this->db = getDB();
    }

    // Save a new record
    public function save($client, $service, $quantity, $price) {
        $total = $quantity * $price;
        $stmt  = $this->db->prepare(
            "INSERT INTO records (client, service, quantity, price, total) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssidd", $client, $service, $quantity, $price, $total);
        return $stmt->execute();
    }

    // Get all records newest first
    public function getAll() {
        $result = $this->db->query(
            "SELECT * FROM records ORDER BY created_at DESC"
        );
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
