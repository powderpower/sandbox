<?php

ini_set('display_errors','on');
ini_set('display_startup_errors', 1);

ini_set('memory_limit', -1);

error_reporting(E_ALL);

require(__DIR__ . '/../vendor/autoload.php');

echo "Тест памяти Array <br>";

$collection = [];

$start = microtime(true);

foreach (range(1, 1000000) as $item) {
    $collection[] = [
        'data' => null,
        'data2' => null,
    ];
}

foreach ($collection as $key => $model) {
    $model['data'] = 'wfeqwfqwefqwefqrgfrewgwergwegergergregпоеноеооооооооооооооооо-' . $key;
    $model['data2'] = 'wfeqwfqwefqwefqrgfrewgwergwegergergregпоеноеооооооооооооооооо-' . $key;
}

$result = microtime(true) - $start;

echo "Всего памяти " . memory_get_usage() . ' <br>';
echo "Время " . $result . ' c. <br>';