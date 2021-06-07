<?php

namespace test;

use PHPUnit\Framework\TestCase;

class LfasrDemoTest extends TestCase
{

    public function testLfasrDemo()
    {
        $result = include __DIR__ . '/../src/LfasrDemo.php';
        $this->assertTrue(strpos($result, '预处理成功') > 1);
    }
}
