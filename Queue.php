<?php

class Queue
{
    private $queue;
    private $maxSize;
    //private $maxSize;

    public function __construct($maxSize = 10){
        //инициализируем очередь
        $this->queue = [];
        //устанавливаем ограничение на количество элементов в очереди
        $this->maxSize = $maxSize;
    }

    public function add($elements){//добавить элемент в конец очереди
        //проверяем не заполнена ли наша очередь
        if(count($this->queue) < $this->maxSize){
            //добавляем новый элемент в конец массива
            array_push($this->queue, $elements);
        } else {
            echo 'Очередь переполнена!';
        }
    }

    public function remove(){//удаление элемента из начала очереди
        if($this->isEmpty()){
            //проверка на пустату очереди
            echo 'Очередь пуста!';
        } else {
            //Удаляем 1ый элемент массива
            return array_shift($this->queue);
        }
    }

    public function head(){//получение головы очереди
        return current($this->queue);
    }

    public function tail(){//получение хвоста очереди
        return end($this->queue);
    }

    public function isEmpty(){//получение количества занятых элементов в очереди
        return empty($this->queue);
    }
}



