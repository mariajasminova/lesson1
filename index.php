<?php
/*1.1. Есть массив Имен и есть текст внутри которого присутсвуют имена 
Найти количество раз, когда имя было ошибочно написано с маленькой буквы */

$text = file_get_contents('text1.txt');
$arr_name = array('maria', 'diana', 'artem', 'boris', 'alisa');
$arr_count = [];
for ($i=0; $i < 5; $i++) { 
	$arr_count[$i] = substr_count($text, $arr_name[$i]);
	echo $arr_name[$i] . ' ' . $arr_count[$i] . '</br>';
}




?>