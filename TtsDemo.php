<?php

include './vendor/autoload.php';

$client = new IFlytek\Xfyun\Speech\TtsClient('', $api_key, $api_secret, ['vcn' => 'x2_qige']);
file_put_contents('./result.mp3', $client->request('欢迎使用科大讯飞语音能力，让我们一起用人工智能改变世界')->getBody());
