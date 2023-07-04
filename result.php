<?php

if (isset($_GET['value1']) || isset($_GET['value2']) || isset($_GET['value3'])) {
	echo $_GET['value1'] + $_GET['value2'] + $_GET['value3'];
}


if (isset($_POST['name']) || isset($_POST['age'])) {
	echo "Ваше имя: {$_POST['name']}, ваш возраст: {$_POST['age']}";
}

$pass = '12345';
if (isset($_POST['pass'])) {
	 if($_POST['pass'] === $pass) {
     echo 'Вы ввели правильный пароль!';
   }
   else {
     echo 'Пароль не верен...';
   }
}

if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
$daysOfWeek = ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];
$time = strtotime("{$_POST['year']}-{$_POST['month']}-{$_POST['day']}");
$num = date('w',$time);
echo $daysOfWeek[$num];
}
  
?>