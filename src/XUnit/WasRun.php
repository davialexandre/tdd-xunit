<?php

namespace XUnit;

class WasRun extends TestCase
{
    public $log;

    public function testMethod(): void
    {
        $this->log .= 'testMethod ';
    }

    public function testBrokenMethod(): void
    {
       throw new \Exception();
    }

    public function setUp(): void
    {
        $this->log = 'setUp ';
    }

    public function tearDown(): void
    {
        $this->log .= 'tearDown ';
    }
}
