<?php
require __DIR__ . '/../vendor/autoload.php';
use function \App\StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize(''),  '');
Assert::eq(capitalize('hello'),  'Hello');

echo 'Все тесты пройдены!';
