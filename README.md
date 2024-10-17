# apibrasil.php.sdk


```
// Primeiro precisamos criar o Device
$teste = \ApiBrasil\Service::dispositivo("store", [
    "Bearer" => "YOUR_BEARER_TOKEN", // Substitua por uma variável de ambiente ou um placeholder
    "SecretKey" => "YOUR_SECRET_KEY", // Substitua por uma variável de ambiente ou um placeholder
    "method" => "POST",
    "body" => [
        "type" => "cellphone",
        "device_name" => "DEVICE_NAME", // Placeholder para o nome do dispositivo
        "device_key" => "DEVICE_KEY", // Placeholder para a senha do dispositivo
        "device_ip" => "DEVICE_IP", // Placeholder para o IP do dispositivo
        "server_search" => "SERVER_SEARCH_KEY", // Placeholder para a chave de busca do servidor
        "webhook_wh_message" => "",
        "webhook_wh_status" => ""
    ]
]);
```
