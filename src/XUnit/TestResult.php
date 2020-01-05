<?php

namespace XUnit;

class TestResult
{
    private $runCount = 0;

    public function testStarted(): void
    {
        $this->runCount += 1;
    }

    public function summary(): string
    {
        return sprintf('%d run, 0 failed', $this->runCount);
    }
}
