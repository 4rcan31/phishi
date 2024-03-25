<?php
class request extends Migration {
        
    public function up() {
        $this->create("request", function($table) {
            $this->query('CREATE TABLE request (
                id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                id_client INT NOT NULL,
                request_data TEXT NOT NULL,
                ip VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (id_client) REFERENCES clients(id)
            );');            
        });
    }
        
    public function down() {
        $this->dropIfExist("request");
    }
        
}