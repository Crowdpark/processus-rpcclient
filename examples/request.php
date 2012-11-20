<?php
require __DIR__ . "/../vendor/autoload.php";

use Processus\Client\JsonRpc\JsonRpcDataVo;
use Processus\Client\JsonRpc\Client;

$data = new JsonRpcDataVo();
$data->setParams(array())
    ->setMethod("Application.Test.ping");

var_dump($data->getPostData());

$client = new Client();
$result = $client->setGateway("http://localhost:9091/api/v2/teststack/index.php")
    ->sendRpc($data);

var_dump($result);