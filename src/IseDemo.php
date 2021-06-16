<?php

namespace test;

use IFlytek\Xfyun\Speech\IseClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = getenv('PHPSDK_SPEECH_TTS_APPID');// 此行代码需要更换为用户自己的appid，例如：$appId = '5ca1e5**'
$apiKey = getenv('PHPSDK_SPEECH_TTS_APIKEY');// 此行代码需要更换为用户自己的apikey，例如：$apiKey = '9a33948763ac*******************'
$apiSecret = getenv('PHPSDK_SPEECH_TTS_APISECRET');// 此行代码需要更换为用户自己的apiSecret，例如：$apiSecret = '4e41a9b93846815****************'

$client = new IseClient($appId, $apiKey, $apiSecret, ['aue' => 'lame']);
$result = $client->request(__DIR__ . '/../resource/result.mp3', '欢迎使用科大讯飞语音能力，让我们一起用人工智能改变世界');
echo $result;
return $result;
