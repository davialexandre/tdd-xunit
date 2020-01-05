<?php

namespace XUnit;

class WasRun extends TestCase
{
    public $log;

    public function testMethod(): void
    {
        $this->log .= 'testMethod';
    }

    public function setUp(): void
    {
        $this->log = 'setUp ';
    }
}
