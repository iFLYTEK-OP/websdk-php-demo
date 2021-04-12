<?php

include './vendor/autoload.php';

$client = new IFlytek\Xfyun\Speech\LfasrClient($app_id, $secret_key);
$taskId = $client->combineUpload(__DIR__ . '/lfasrTest.wav');
echo $taskId . "\n";
sleep(3);
$progress = $client->getProgress($taskId)->getBody()->getContents();
echo $progress . "\n";
sleep(3);
$result = $client->getResult($taskId)->getBody()->getContents();
echo $result . "\n";