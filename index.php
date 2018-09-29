<?php
/*1.1. 
Есть массив Имен и есть текст внутри которого присутсвуют имена 
Найти количество раз, когда имя было ошибочно написано с маленькой буквы 
*/
function f1(){
	$text = file_get_contents('text1.txt');
	$arr_name = array('maria', 'diana', 'artem', 'boris', 'alisa');
	$arr_count = [];
	for ($i=0; $i < 5; $i++) { 
		$arr_count[$i] = substr_count($text, $arr_name[$i]);
		echo $arr_name[$i] . ' ' . $arr_count[$i] . '</br>';
	}
}

f1();

/*
1.2. Взять свое имя 
Подсчитать, сколько раз в тексте присутсвует каждая буква из вашего имени 
*/
function f2(){
	$text = file_get_contents('text2.txt');
	$name = 'Maria';
	$count_char = [];
	$arr_char = str_split($name, 1);
	for ($i=0; $i < 5; $i++) { 
		$count_char[$i] = substr_count($text, $arr_char[$i]);
		echo $arr_char[$i] . " " . $count_char[$i] . '</br>';
	}
}

 f2();


?>