<?php
declare(strict_types=1);

$hairetu=["あ","い","う","え","お"];

foreach ($hairetu as $value) {
    assert($value !== "お");
    //Fatal error: Uncaught AssertionError: assert($value !== 'お') in /usr/share/nginx/html/func/assert.php:7 Stack trace: #0 /usr/share/nginx/html/func/assert.php(7): assert(false, 'assert($value !...') #1 {main} thrown in /usr/share/nginx/html/func/assert.php on line 7
  echo $value;
}