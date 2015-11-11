<?php
require_once __DIR__ . '/../vendor/autoload.php';

$number = intval($argv[1]);

$main = new App\fb\FizzBuzz();
$main->setScreamer(new \App\fb\screamer\Fizz());
$main->setScreamer(new \App\fb\screamer\Buzz());

echo 'start====================================' . PHP_EOL;

for ($num = 1; $num <= $number; $num++) {
    echo $main->run($num) . PHP_EOL;
}

echo 'end======================================' . PHP_EOL;