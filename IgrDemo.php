<?php

include './vendor/autoload.php';

$appId = '';// 需要填入app_id
$apiKey = '';// 需要填入api_key
$apiSecret = '';// 需要填入api_secret

$client = new IFlytek\Xfyun\Speech\IgrClient($appId, $apiKey, $apiSecret);
echo $client->request('./igr_pcm_16k.pcm');
