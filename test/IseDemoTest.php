<?php

namespace test;

use PHPUnit\Framework\TestCase;

class IseDemoTest extends TestCase
{

    public function testIseDemo()
    {
        $result = include __DIR__ . '/../src/IseDemo.php';
        $this->assertTrue(strpos($result, '欢迎使用科大讯飞语音能力') > 1);
    }
}
