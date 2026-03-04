-- TURATSINZE DOMINIQUE| REGNO:25/30642 | ROLE:DATABASE + QA + GIT INTEGRATION

CREATE DATABASE IF NOT EXISTS musanze_service_desk;
USE musanze_service_desk;

CREATE TABLE IF NOT EXISTS records (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    client     VARCHAR(150)  NOT NULL,
    service    VARCHAR(150)  NOT NULL,
    quantity   INT           NOT NULL,
    price      DECIMAL(10,2) NOT NULL,
    total      DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
