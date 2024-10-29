<?php

namespace CustomPage;

class RequestHandler{
    

    public function getHeaders() {
        $headers = getallheaders();
        foreach ($headers as $header => $value) {
            echo "$header: $value\n";
        }
    }

   
    public function getParameters() {
        $params = $_REQUEST; 
        foreach ($params as $key => $value) {
            echo "$key: $value\n";
        }
    }

    public function handleRequest() {
        echo "Заголовки запроса:\n";
        $this->getHeaders();
        echo "\nПараметры запроса:\n";
        $this->getParameters();
    }
}


$requestHandler = new RequestHandler();
$requestHandler->handleRequest();

?>