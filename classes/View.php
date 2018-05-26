<?php

require __DIR__.'/GuestBook.php';

class View
{
    protected $data;

    function __construct($way)
    {
        //путь собираетя из обьекта
        $this->way = $way;
        //читает содержимое файла, помещает в массиа
        $this->data = file($way);
    }

    public function getData()
    {
        //возвращает массив записей (содержимое файла)
        return  $this->data;
    }

    public function append($text)
    {
        //добавление элемент в конец массива (содержимое файла, элемент)
        array_push($this->data,  $text);
        return $this;
    }
}


