<?php
require_once "Queue.php";

$object = new Queue();

//заполняем очередь

$object->add(10);
//$object->add(10);
$object->add(9);
$object->add(8);
$object->add(7);
$object->add(6);
$object->add(5);
$object->add(4);
$object->add(3);
$object->add(2);
$object->add(1);

echo 'Удаляем 1ый элемент в очереди: '. $object->remove(). PHP_EOL;//удаляем 1ый элемент который вошел 10
echo 'Удаляем 1ый элемент в очереди: '.$object->remove() . PHP_EOL;//удаляем 1ый элемент который вошел 9
echo 'Удаляем 1ый элемент в очереди: '.$object->remove() .  PHP_EOL;//удаляем 1ый элемент который вошел 7

echo 'Первый элемент очереди: '.$object->head() .  PHP_EOL;
echo 'Последний элемент очереди: '.$object->tail() .  PHP_EOL;