<?php
//предопределенные массивы
// $GLOBAL
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION

echo 'Hello world';

?>
<!---<?
$string = "Фам|Имя|Город|01564654"; 
echo $string . '<br/>';
$arr = explode('|', $string);// принимает разд.знак - | - принимает массив, который нужно разбить - $string
//var_dump($arr); //сколько эллементов
$arr[2] = 'Симф';
$string = implode('|', $arr);// обратные действия функции explode, соединяет
echo $string . '<br/>';
?>
<!---<?php
// двумерный массив
$arr = array(
			'Россия' => array('Москва', 'Питер', 'Симфер'),
			'Франция' => array('Париж', 'Лион'),
			'Англия' => array('Лион','Ливерпуль'));
//echo $arr['Россия'][0];
foreach($arr as $index => $country) {
// имя массива который хотим разобрать - $arr, ключевое слово as, //дальше название какое-то - $country.		
//разобрать массив по переменной country
	echo "<h1>$index:</h1>"; //вывели ключи: Россия, Франция, Англия.
	foreach($country as $town)
		echo "$town ";
}
?>
<!---<?php
$arr = array('Привет' => 'Hello', 'Пока' => 'goodbuy');
	echo $arr['Привет'] . '<br/>';
	echo $arr['Пока'];
?>
<!---<?php
echo 'select';
for($i = 1920; $i <= 2000; $i++)
	echo "<option value = \"$i\">$i</option>";
echo '</select>';	
?>
<!---<?php
// for (1-объявляем счетчик; 2-пишим условие; 3-изменяем счетчик)
$n = 20;
for ($i = 5; $i <= $n; $i++); {
	echo "$i<br/>";
}
?>
<!---<?php
// do...while - делаем действие, потом смотрим на условие|while - пока условие является истиной в этом случае цикл выполняем
$i = 1;
do {
	echo "$i<br/>";
	$i++;
}
while ($i <= 0)		
?>
<!---<?php
//Циклы и массивы
// while - пока
// do...while
// for
// foreach - перебрать все или переберать пока не закончатся

// Счетчик циклов
$i =1;
while ($i <= 10) {
	echo "$i<br/>";
	$i++;
}
?>
<!---<?php
function power($one, $too) {
	if($too == 1)
		return 1;
		
	else 
		return ($one * power($one, $too - 1));
}
$res = power(2, 4);
	echo $res;
?>
<!---<?php
// рекурсия функция
// факториал числа - произведение всех чисел до этого
function fact($x) {
	if($x == 1) //если параметр Х = 1, то
		return 1;
	else //или 
	// 5 * 4 * 3 * 2 * fact(1), дошли до 1 - попадаем в if блок
		return ($x * fact($x -1)); //рекурсия!
}
?>
<!---<?php
function not_1($a) {
if ($a == 1)
		return $a;
	echo 'Параметр не равен 1!';	
}	
not_1(1);
not_1(2);

?>
<!---<?php
$a = 1;
function one1($a) {
	$a++;
	echo $a;
}
	echo $a . '<br/>';
	
	one1($a);
?>
<!---<?php
// Функции - function
function compare_numbers($one, $too) {
if($one > $too)
	echo "$one > $too";	
elseif($one < $too)
	echo "$one < $too";	
else
	echo "$one = $too";
}	
compare_numbers(3, 7);
	echo '<br/>';
compare_numbers(6, 9);
	echo '<br/>';
function sum($a, $b) {
	return ($a + $b); //запомнить значение - return
}
$sum = sum(3, 7);
	echo $sum;
?>
<!---<?php
//оператор switch
$a = 3;
switch($a) {
	case 1:
		echo "a = 1";
		break;
	case 2:
		echo "a = 2";
		break;
	case 3:
		echo "a = 3";
		break;
	default:
		echo "а не равно 1, не равно 2, не равно 3!";
}		
?>
<!---<?php
// Оператор - если - if (Условие) Действие;
// else - иначе {блок операторов}
// elseif - иначе если

	$one = 10;
	$too = 10;
	
	if($one > $too) {
		echo "$one > $too";
	}	
	elseif($one < $too) {
		echo "$one < $too";
	}	
	else {
		echo "$one = $too";
	}
?>
<!---<?php
	$one = true;
	$too = false;
	
	$res1 = ($one xor $too);
	$res2 = ($one xor $one);
	$res3 = ($too xor $too);
	$res4 = ($too xor $one);
	
	echo (int)$res1 . '<br/>';
	echo (int)$res2 . '<br/>';
	echo (int)$res3 . '<br/>';
	echo (int)$res4 . '<br/>';
?>
<!---<?php
	for ($one = 2015; $one < 2050; $one += 4) {
	//echo '<br/>';
	
	echo "<p>$one</p>";
	}
?>
<!---<?php
	$one = 5;
	
	//echo $one++;
	echo '<br/>';
	echo ++$one;
	echo '<br/>';
	//echo $one;
?>
<!---<?php
	//$answer = (5 === 5.0);
	$answer = (5 == 5.0);
	
	echo (int)$answer;
	
	// && И
	// || ИЛИ
	// ! НЕ
	echo '<br/>';
	$answer2 = ((5 === 5.0) && (5.0 == 5));
	
	echo (int)$answer2;
?>
<!---<?php
	//склейка строк
	$priv = 'Привет, ';
	$username = 'Имя';
	//ИЛИ
	
	$priv .= $username;
	
	echo '<p>' . $priv . $username . '</p>';
?>

<!---<?php
	$x = true;
	//$x = false;
	//привести к целому числу (int)
	echo (int)$x;
?>

<!---<?php
	$x = '258.40';
echo (int)$x;
?>

<!---<?php
	$x = 50;
$print1 = ('не выв. x = $x');
$print2 = ("выв. x = $x");
echo $print1;
echo '<br>';
echo $print2;
?>