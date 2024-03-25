<?php

class ClientsModel extends BaseModel{

    public function new(string $sessionSao){
        $this->prepare();
        $this->insert("clients")->values([
            "session_sao" => $sessionSao
        ]);
        return $this->execute()->lastId();
    }

    public function existsBySessionSao(string $sessionSao){
        $this->prepare();
        $this->select(['*'])
            ->from("clients")
            ->where("session_sao", $sessionSao);
        return $this->execute()->exists();
    }

    public function getIdBySessionSao(string $sessionSao){
        $this->prepare();
        $this->select(['id'])->from("clients")->where("session_sao", $sessionSao);
        return $this->execute()->all()->id ?? -1;
    }
}