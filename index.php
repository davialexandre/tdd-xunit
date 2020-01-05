<?php

use Test\TestCaseTest;
use XUnit\TestResult;
use XUnit\TestSuite;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '//', $class);
    include 'src/' . $class . '.php';
});

$suite = new TestSuite();
$suite->add(new TestCaseTest('testTemplateMethod'));
$suite->add(new TestCaseTest('testResult'));
$suite->add(new TestCaseTest('testFailedResultFormatting'));
$suite->add(new TestCaseTest('testFailedResult'));
$suite->add(new TestCaseTest('testSuite'));

$result = new TestResult();
$suite->run($result);

echo $result->summary();

