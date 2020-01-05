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

    public function run(): void
    {
        $this->setUp();
        $this->{$this->name}();
        $this->tearDown();
    }

    public function tearDown(): void
    {
    }
}
