<?php

use Test\TestCaseTest;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '//', $class);
    include 'src/' . $class . '.php';
});

function runTest($class, $testName) {
    echo '-> Running ' . $class . '::' . $testName . PHP_EOL;
    $test = new $class($testName);
    $test->run();
}

runTest(TestCaseTest::class, 'testTemplateMethod');
runTest(TestCaseTest::class, 'testResult');

