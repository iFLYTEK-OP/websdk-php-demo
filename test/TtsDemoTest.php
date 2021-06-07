<?php

namespace test;

use PHPUnit\Framework\TestCase;

class TtsDemoTest extends TestCase
{

    public function testTtsDemo()
    {
        $result = include __DIR__ . '/../src/TtsDemo.php';
        $this->assertTrue($result);
        $this->assertEquals('54f6382a5d94a1dc12187dfda7b52f2a', md5('../resource/result.mp3'));
    }
}
