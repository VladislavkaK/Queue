<?php
require_once "Queue.php";

$object = new Queue();

//��������� �������

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

echo '������� 1�� ������� � �������: '. $object->remove(). PHP_EOL;//������� 1�� ������� ������� ����� 10
echo '������� 1�� ������� � �������: '.$object->remove() . PHP_EOL;//������� 1�� ������� ������� ����� 9
echo '������� 1�� ������� � �������: '.$object->remove() .  PHP_EOL;//������� 1�� ������� ������� ����� 7

echo '������ ������� �������: '.$object->head() .  PHP_EOL;
echo '��������� ������� �������: '.$object->tail() .  PHP_EOL;