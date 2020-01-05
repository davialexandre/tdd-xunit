<?php

namespace XUnit;

class TestSuite
{
    private $tests = [];

    public function add(TestCase $test): void
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result): void
    {
        foreach ($this->tests as $test) {
            $test->run($result);
        }
    }
}
