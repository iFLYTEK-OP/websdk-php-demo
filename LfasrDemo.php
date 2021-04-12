<?php

include './vendor/autoload.php';

$client = new IFlytek\Xfyun\Speech\LfasrClient($app_id, $secret_key);
$taskId = $client->combineUpload(__DIR__ . '/lfasrTest.wav');
echo $taskId . "\n";
sleep(3);
$progress = $client->getProgress('f09ffa7bcb33408aba08a3dd7c5cd019')->getBody()->getContents();
echo $progress . "\n";;
sleep(3);
$result = $client->getResult('f09ffa7bcb33408aba08a3dd7c5cd019')->getBody()->getContents();
echo $result . "\n";