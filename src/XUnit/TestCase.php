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

    public function run(): TestResult
    {
        $result = new TestResult();
        $result->testStarted();

        $this->setUp();
        try {
            $this->{$this->name}();
        } catch(\Exception | \Error $e) {
            $result->testFailed();
        }
        $this->tearDown();

        return $result;
    }

    public function tearDown(): void
    {
    }
}
