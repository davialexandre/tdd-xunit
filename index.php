<?php

use Test\TestCaseTest;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '//', $class);
    include 'src/' . $class . '.php';
});

$test = new TestCaseTest('testRunning');
$test->run();
