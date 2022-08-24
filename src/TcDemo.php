<?php

namespace test;

use IFlytek\Xfyun\Speech\TcClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = '5ca1e5**';// 此行代码需要更换为用户自己的appid
$apiKey = '9a33948763ac*******************';// 此行代码需要更换为用户自己的apikey
$apiSecret = '4e41a9b93846815****************';// 此行代码需要更换为用户自己的apiSecret

// 这里的$app_id、$api_key、$api_secret是在开放平台控制台获得
$client = new TcClient($appId, $apiKey, $apiSecret);

// 文本纠错请求，返回格式为json字符串
$content = $client->request('历史上有很多注明的人物，其中唐太宗李世民就是一位。')->getBody()->getContents();
$decodeContent = json_decode($content, true);
echo base64_decode($decodeContent['payload']['result']['text']);
