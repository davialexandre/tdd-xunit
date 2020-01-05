<?php

namespace Test;

use XUnit\TestCase;
use XUnit\TestResult;
use XUnit\WasRun;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run();
        assert($test->log === 'setUp testMethod tearDown ');
    }

    public function testResult(): void
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' === $result->summary());
    }

    public function testFailedResult(): void
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        assert('1 run, 1 failed' === $result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert('1 run, 1 failed' === $result->summary());
    }
}
