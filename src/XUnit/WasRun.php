<?php

namespace XUnit;

class WasRun
{
    public $wasRun;
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        $this->{$this->name}();
    }

    public function testMethod(): void
    {
        $this->wasRun = 1;
    }
}
