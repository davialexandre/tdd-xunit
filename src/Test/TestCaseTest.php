<?php

namespace Test;

use XUnit\TestCase;
use XUnit\WasRun;

class TestCaseTest extends TestCase
{
    private $test;

    public function setUp(): void
    {
        $this->test = new WasRun('testMethod');
    }

    public function testRunning(): void
    {
        $this->test->run();
        assert($this->test->wasRun);
    }

    public function testSetUp(): void
    {
        $this->test->run();
        assert($this->test->wasSetUp);
    }

}
