<?php

include './vendor/autoload.php';

$appId = '';// 需要填入app_id
$apiKey = '';// 需要填入api_key
$apiSecret = '';// 需要填入api_secret

$client = new IFlytek\Xfyun\Speech\IseClient($appId, $apiKey, $apiSecret);
echo $client->request('./result.mp3', '欢迎使用科大讯飞语音能力，让我们一起用人工智能改变世界');
