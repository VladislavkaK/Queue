<?php

class Queue
{
    private $queue;
    private $maxSize;
    //private $maxSize;

    public function __construct($maxSize = 10){
        //�������������� �������
        $this->queue = [];
        //������������� ����������� �� ���������� ��������� � �������
        $this->maxSize = $maxSize;
    }

    public function add($elements){//�������� ������� � ����� �������
        //��������� �� ��������� �� ���� �������
        if(count($this->queue) < $this->maxSize){
            //��������� ����� ������� � ����� �������
            array_push($this->queue, $elements);
        } else {
            echo '������� �����������!';
        }
    }

    public function remove(){//�������� �������� �� ������ �������
        if($this->isEmpty()){
            //�������� �� ������� �������
            echo '������� �����!';
        } else {
            //������� 1�� ������� �������
            return array_shift($this->queue);
        }
    }

    public function head(){//��������� ������ �������
        return current($this->queue);
    }

    public function tail(){//��������� ������ �������
        return end($this->queue);
    }

    public function isEmpty(){//��������� ���������� ������� ��������� � �������
        return empty($this->queue);
    }
}



