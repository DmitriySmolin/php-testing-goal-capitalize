<?php
require __DIR__ . '/../vendor/autoload.php';
use function \App\StringUtils\capitalize;

assert(capitalize('') === '');
assert(capitalize('hello') === 'Hello');

echo 'Все тесты пройдены!';
