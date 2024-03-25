<?php

class VictimisModel extends BaseModel{

    public function new(string $idClient, string $userEmail, string $password){
        $this->prepare();
        $this->insert("victims")->values([
            "id_client" => $idClient,
            "user_email" => $userEmail,
            "password_victim" => $password
        ]);
        return $this->execute()->lastId();
    }
}