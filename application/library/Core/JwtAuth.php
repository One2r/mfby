<?php
namespace Core;

use \Firebase\JWT\JWT;

class JwtAuth {

    protected function claim(){
        $claim = [
            'iss' => (isset($_SERVER['HTTPS'])?"https://":"http://") . $_SERVER['HTTP_HOST'],
            'iat' => time(),
            'nbf' => time(),
            'jti' => uniqid()
        ];
        $token_ttl = \Yaf_Registry::get('config')->jwt['ttl'];
        if($token_ttl){
            $claim['exp'] = $claim['iat'] + $token_ttl;
        }
        return $claim;
    }

    public function getToken(int $sub){
        $claim = $this->claim();
        $claim['sub'] = $sub;
        return JWT::encode($claim, "123456");
    }
}