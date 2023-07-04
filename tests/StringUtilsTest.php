<?php
require __DIR__ . '/../vendor/autoload.php';

if (App\StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (App\StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
?>