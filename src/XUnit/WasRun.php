<?php

namespace XUnit;

class WasRun extends TestCase
{
    public $wasRun;

    public function testMethod(): void
    {
        $this->wasRun = 1;
    }
}
