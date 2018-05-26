<?php
require __DIR__ . '/classes/View.php';

$book = new GuestBook(__DIR__ . '/db.txt');
$book->append( "\n".'Новый текст ')->save();



include __DIR__ . '/temp/index.php';