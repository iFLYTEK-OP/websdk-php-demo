<?php

include './vendor/autoload.php';

$appId = '';// 需要填入app_id
$secretKey = '';// 需要填入secret_key
$client = new IFlytek\Xfyun\Speech\LfasrClient('', '');
echo "开始上传音频...\n";
$taskId = $client->combineUpload(__DIR__ . '/lfasrTest.wav');
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
echo $result . "\n";
