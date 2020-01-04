<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '//', $class);
    include 'src/' . $class . '.php';
});


use XUnit\WasRun;

$test = new WasRun('testMethod');
var_dump($test->wasRun);
$test->run();
var_dump($test->wasRun);
