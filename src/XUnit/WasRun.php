<?php

namespace XUnit;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function testMethod(): void
    {
        $this->wasRun = 1;
    }

    public function setUp(): void
    {
        $this->wasSetUp = 1;
    }
}
