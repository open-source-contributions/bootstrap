--TEST--
Throwable handling
--SKIPIF--
<?php

if (PHP_VERSION_ID < 70000) {
    echo 'skip PHP >= 7.0.0 required';
}

?>
--FILE--
<?php

require __DIR__ . '/../src/bootstrap.php';

undefined_function();
?>
--EXPECTF--
Call to undefined function undefined_function() in %s/tests/003-throwable.php:5
