<?php

namespace test;

use IFlytek\Xfyun\Speech\TtsClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = '5ca1e5**';// 此行代码需要更换为用户自己的appid
$apiKey = '9a33948763ac*******************';// 此行代码需要更换为用户自己的apikey
$apiSecret = '4e41a9b93846815****************';// 此行代码需要更换为用户自己的apiSecret

$client = new TtsClient($appId, $apiKey, $apiSecret);
file_put_contents(__DIR__ . '/../resource/result.mp3', $client->request('欢迎使用科大讯飞语音能力，让我们一起用人工智能改变世界')->getBody()->getContents());
return true;
