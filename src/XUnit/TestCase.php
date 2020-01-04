<?php

namespace XUnit;

class TestCase
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        $this->{$this->name}();
    }
}
