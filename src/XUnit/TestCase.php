<?php

namespace XUnit;

class TestCase
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setUp(): void
    {
    }

    public function run(TestResult $result): void
    {
        $result->testStarted();

        $this->setUp();
        try {
            $this->{$this->name}();
        } catch(\Exception | \Error $e) {
            $result->testFailed();
        }
        $this->tearDown();
    }

    public function tearDown(): void
    {
    }
}
