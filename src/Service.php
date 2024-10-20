<?php

namespace ApiBrasil;

use GuzzleHttp\Exception\ClientException;

class Service extends Base
{
    public static function dispositivo(string $action, array $data) {
        $base_uri = "https://cluster.apigratis.com/api/v2/devices/";
        $method = $data['method'] ?? 'POST';
        $body = $data['body'] ?? [];

        $headers = [
            "Content-Type" => "application/json",
            "SecretKey" => $data["SecretKey"],
            "Authorization" => "Bearer ".$data['Bearer'],
        ];

        $response = self::requisicaoWhatsApp($method, $base_uri, $action, $headers, $body);

        return $response;
    }

    public static function WhatsAppBaileys(string $action, array $data) {
        
        $base_uri = "https://cluster.apigratis.com/api/v2/evolution/";
        $method = $data['method'] ?? 'POST';

        $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
            "Authorization" => "Bearer ".$data['Bearer'],
        ];

        if (isset($data['DeviceToken'])) {
            $headers['DeviceToken'] = $data['DeviceToken'];
        }

        $body = $data['body'] ?? [];

        $response = self::requisicaoWhatsApp($method, $base_uri, $action, $headers, $body);
        return $response;
    }

    public static function Server(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/servers/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Auth(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/message";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Plan(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/plans/";
            $method = $data['method'] ?? 'POST';

            if($action == "me"){
                $base_uri = "https://gateway.apibrasil.io/api/v2/plan/";
            }
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }
    
    public static function Profile(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/profile/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Device(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/devices/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            // para criar um dispositivo é necessário informar o SecretKey
            if (isset($data['SecretKey'])) {
                $headers['SecretKey'] = $data['SecretKey'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function WhatsApp(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/whatsapp/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            // para usar a classe é necessário informar o DeviceToken
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Vehicles(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/vehicles/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Correios(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/correios/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function CNPJ(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/dados/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function CEP(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/cep/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function HoliDays(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/holidays/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }
    
    public static function DDD(String $action = '', Array $data = []) {

        try {

            $base_uri = "https://gateway.apibrasil.io/api/v2/ddd/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

}
