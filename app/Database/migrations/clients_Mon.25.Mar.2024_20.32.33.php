<?php
class clients extends Migration {
        
    public function up() {
        $this->create("clients", function($table) {
            $this->query('CREATE TABLE clients (
                id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                session_sao VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );');            
        });
    }
        
    public function down() {
        $this->dropIfExist("clients");
    }
        
}