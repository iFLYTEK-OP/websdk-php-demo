<?php

namespace test;

use PHPUnit\Framework\TestCase;

class IgrDemoTest extends TestCase
{

    public function testIgrDemo()
    {
        $result = include __DIR__ . '/../src/IgrDemo.php';
        $this->assertArrayHasKey('result', $result);
    }
}
