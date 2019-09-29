<?php


require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/PointsmartV3/MetaData/Device.php'; //必须包含才能看到Meta

use PointsmartV3\Request\DeviceClient;

$client = new DeviceClient("127.0.0.1:60001", [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
    'timeout' => 100,   //超时
]);

$argument = [];
$metadata = [];
$options = [];


$jsonReq = new \PointsmartV3\Request\JsonReply();   //这里其实是request message
$jsonReq->setResult("test");
$num = 0;

//send
while (true) {
    $reply = [];
    try {
        list($reply, $status) = $client->Ping($jsonReq, $argument, ['\Protobuf\JsonReply', 'decode'], $metadata, $options)->wait();
//          $reply = $client->Ping($jsonReq, $argument, ['\Protobuf\JsonReply', 'decode'], $metadata, $options)->wait();
//          var_dump($reply);exit;
        echo "\r\n";
        echo $reply->getResult();
        echo "\r\n";
        sleep(1);
    } catch (Exception $exception) {
        echo $exception->getMessage();
        $num = 0;
        break;
    }
}




