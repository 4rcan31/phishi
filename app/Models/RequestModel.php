<?php

class RequestModel extends BaseModel{

    public function new(int $idClient, string $request, string $ip){
        $this->prepare();
        $this->insert("request")->values([
            "id_client" => $idClient,
            "request_data" => $request,
            "ip" => $ip
        ]);
        return $this->execute()->lastId();
    }
}