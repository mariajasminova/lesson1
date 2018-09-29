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

 /*
1.3. Текст произвольной длины, если текст большей, чем 50 символов 
длины, то обрезать его до 47 символов и в конце поставить "..." Троеточие не должно идти после пробела 
 */

function f3(){
	$text = file_get_contents('text3.txt');
	$count_char = strlen($text);
	if ($count_char > 47) {
		$new_text = substr($text, 0, 47);
	}
	echo rtrim($new_text) . "...";
}

f3();

function f4(){
	$text = file_get_contents('text3.txt');
	$count_char = strlen($text);
	if ($count_char > 47) {
		echo substr($text, 0, strpos($text, ' ', 47)) . "...";}
}		

f4();

/*
2.1. Найти произведение всех чисел через reduce
*/
function f5($a, $b){
 $a *= $b;
 return $a;
}

$arr = [1, 2, 3, 4, 5];
var_dump(array_reduce($arr, "f5", 1));

?>