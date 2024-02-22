<?php

use Alura\DesignPattern\PdoConnection;

require 'vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');
echo $pdo->query("Select 'Resultado pdo'")->execute().PHP_EOL;

$pdo2 = PdoConnection::getInstance('sqlite::memory:');
echo $pdo2->query('Select 1')->execute().PHP_EOL;

var_dump($pdo, $pdo2);
