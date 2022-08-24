<?php

namespace test;

use IFlytek\Xfyun\Speech\LfasrClient;

include __DIR__ . '/../vendor/autoload.php';

$appId = '5ca1e5**';// 此行代码需要更换为用户自己的appid
$secretKey = '4e41a9b93846815****************';// 此行代码需要更换为用户自己的secretKey
$client = new LfasrClient($appId, $secretKey);
echo "开始上传音频...\n";
$taskId = $client->combineUpload(__DIR__ . '/../resource/lfasrTest.wav');
echo "音频上传成功，task_id: $taskId\n";
do {
    $progress = json_decode($client->getProgress($taskId)->getBody()->getContents(), true);

    if ($progress['ok'] !== 0) {
        echo "获取任务进度失败\n";
        exit;
    }

    if ($progress['err_no'] !== 0) {
        echo "获取任务进度失败，错误码：" . $progress['err_no'] . "\n";
        exit;
    }
    $data = json_decode($progress['data'], true);

    if ($data['status'] == 9) {
        echo "音频转写成功，开始获取结果...\n";
        break;
    } else {
        echo "音频转写中...\n";
    }
    sleep(5);
} while (true);
$result = $client->getResult($taskId)->getBody()->getContents();
echo $result;
return $result;
