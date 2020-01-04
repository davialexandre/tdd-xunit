<?php

namespace Test;

use XUnit\TestCase;
use XUnit\WasRun;

class TestCaseTest extends TestCase
{
    public function testRunning(): void
    {
        $test = new WasRun('testMethod');
        assert($test->wasRun === null);
        $test->run();
        assert($test->wasRun);
    }

}
