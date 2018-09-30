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
echo "</br>";

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
 echo "</br>";

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
echo "</br>";

function f4(){
	$text = file_get_contents('text3.txt');
	$count_char = strlen($text);
	if ($count_char > 47) {
		echo substr($text, 0, strpos($text, ' ', 47)) . "...";}
}		

f4();
echo "</br>";

/*
2.1. Найти произведение всех чисел через reduce
*/
function f5($a, $b){
 $a *= $b;
 return $a;
}

$arr = [1, 2, 3, 4, 5];
var_dump(array_reduce($arr, "f5", 1));
echo "</br>";


/*
2.2. Получить массив, состоящий только из четных элементов массива 
*/
function f61($a){
	return(!($a & 1));
}
$arr1 = [1, 2, 3, 4, 5];
print_r(array_filter($arr1, "f61"));

/*
2.3. Получить масив, в котором все значения возведены в квадрат
*/

function f7($a)
{
    return($a * $a);
}
$arr2 = [1, 2, 3, 4, 5];
$b = array_map("f7", $arr2);
print_r($b);


/*
3.1. Организовать структуру классов.
Класс "Человек". (поля - фио, возраст)
Класс "Студент". Форма обучения, курс. Студент может получать оценки (тройки, пятерки и т.д.). Должен быть метод, который нам отдаст все оценки, которые получал студент.
Класс "Сотрудник". Размер оклада. Сотрудник может получать зарплату (конкретного числа, конкретную сумму - если сумма не указана, то согласно размеру оклада). Можно получить список всех выданных зарплат с датами. В качестве даты для простоты выступает просто строка.
Класс "Менеджер"*. Имеет список сотруников в подчинении. Сотрудников можно добавлять, а также удалять сотрудников, указав фамилию сотрудника, которого решили убрать. Можно получить список сотрудников, которые есть в подчинении.
*/
class Human { 
	public $fio; 
	public $age; 
} 

class Student { 
	public $formEduc; 
	public $course; 
	public $ratings = []; 

	public function viewRating(){ 
		foreach($this->ratings as $elem){ 
		echo $elem . ' '; 
		} 
	} 
} 


class Employee { 
		public $salary = 35000; 
		public $payment_date = [];

		public function viewPayment(){ 
		foreach ($this->payment_date as $date => $elem){ 
			if($elem == 0){ 
				echo $date . ' ' . $this->salary . '</br>'; 
			} else { 
				echo $date . ' ' . $elem . '</br>'; 
			} 
		} 
	}
} 


class Menager { 
	public $fio_empl = []; 

	public function viewFioEmpl(){ 
		foreach($this->fio_empl as $elem){ 
		echo $elem . '</br>'; 
		} 
	}

public function addFioEmpl($name){
	$this->fio_empl[] = $name;
}

	public function delFioEmpl($name){ 
		foreach($this->fio_empl as $key => $elem ){ 
			if(substr_count($elem, $name) !== 0){
				unset($this->fio_empl[$key]);
				}
			} 
	}

}



//Человек
$Hum = new Human(); 
$Hum -> initials = "Petrov"; 
$Hum -> age = "29"; 
$Hum2 = new Human(); 
$Hum2 -> initials = "Vlasov"; 
$Hum2 -> age = "34"; 


//Студент
$stu = new Student(); 
$stu -> ratings = [3, 4, 5];
echo $stu -> viewRating(); 
echo "</br>";echo "</br>";

//Employee
$emp = new Employee();
$emp -> payment_date = ['10/01/2018' => 40000, '10/02/2018' => 40000, '10/03/2018' => 0];
$emp -> viewPayment();
echo "</br>";echo "</br>";

//Менеджер
echo "</br>";
$men = new Menager();
$men -> fio_empl = ['Petrov', 'Sidorov'];
$men -> viewFioEmpl();
echo "</br>";
$men -> delFioEmpl('Sidorov');
$men -> viewFioEmpl();
echo "</br>";
$men -> addFioEmpl('Kapustkin');
$men -> viewFioEmpl();




?>