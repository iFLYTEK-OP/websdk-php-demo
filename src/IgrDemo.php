<?php

namespace test;

use IFlytek\Xfyun\Speech\IgrClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = getenv('PHPSDK_SPEECH_TTS_APPID');// 此行代码需要更换为用户自己的appid，例如：$appId = '5ca1e5**'
$apiKey = getenv('PHPSDK_SPEECH_TTS_APIKEY');// 此行代码需要更换为用户自己的apikey，例如：$apiKey = '9a33948763ac*******************'
$apiSecret = getenv('PHPSDK_SPEECH_TTS_APISECRET');// 此行代码需要更换为用户自己的apiSecret，例如：$apiSecret = '4e41a9b93846815****************'

$client = new IgrClient($appId, $apiKey, $apiSecret);

$result = $client->request(__DIR__ . '/../resource/igr_pcm_16k.pcm');
echo json_encode($result);
return $result;
