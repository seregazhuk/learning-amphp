<?php

/** @var Generator $logger */
$logger = call_user_func(function() {
    try {
        echo 'Log: ' . yield . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage();
    }
});

$logger->send('Hello world');
$logger->throw(new Exception('something wrong'));
