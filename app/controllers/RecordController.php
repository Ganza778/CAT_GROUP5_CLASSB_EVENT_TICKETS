<?php
// NAME | REG NO | ROLE 6
// app/controllers/RecordController.php

require_once __DIR__ . '/../models/Record.php';

class RecordController {
    private $record;

    public function __construct() {
        $this->record = new Record();
    }

    // Process form submission (TASK BF)
    public function store($client, $service, $quantity, $price) {
        if (empty($client) || empty($service) || $quantity <= 0 || $price <= 0) {
            return ['success' => false, 'message' => 'All fields are required.'];
        }
        $saved = $this->record->save(
            trim($client),
            trim($service),
            intval($quantity),
            floatval($price)
        );
        if ($saved) {
            return ['success' => true, 'message' => 'Record saved successfully'];
        }
        return ['success' => false, 'message' => 'Failed to save record.'];
    }

    // Fetch all records for table display
    public function index() {
        return $this->record->getAll();
    }
}
?>
