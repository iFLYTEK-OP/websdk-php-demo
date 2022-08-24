<?php

namespace test;

use IFlytek\Xfyun\Speech\IgrClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = '5ca1e5**';// 此行代码需要更换为用户自己的appid
$apiKey = '9a33948763ac*******************';// 此行代码需要更换为用户自己的apikey
$apiSecret = '4e41a9b93846815****************';// 此行代码需要更换为用户自己的apiSecret

$client = new IgrClient($appId, $apiKey, $apiSecret);

$result = $client->request(__DIR__ . '/../resource/igr_pcm_16k.pcm');
echo json_encode($result);
return $result;
