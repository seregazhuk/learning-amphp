<?php

require '../vendor/autoload.php';

// resolver
$deferred = new Amp\Deferred;
$promise = $deferred->promise();

// consumer
$promise->onResolve(function (Throwable $error = null, $result = null) {
    if ($error) {
            echo 'Something went wrong: ' . $error->getMessage();
            return;
    }

    echo 'Promise was resolved with: ' . $result;
});


$deferred->resolve('my value');
//$deferred->fail(new Exception('error'));
