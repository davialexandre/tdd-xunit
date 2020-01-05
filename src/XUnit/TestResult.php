<?php

namespace XUnit;

class TestResult
{
    private $runCount = 0;
    private $errorCount = 0;

    public function testStarted(): void
    {
        $this->runCount += 1;
    }

    public function testFailed(): void
    {
        $this->errorCount += 1;
    }

    public function summary(): string
    {
        return sprintf('%d run, %d failed', $this->runCount, $this->errorCount);
    }
}
