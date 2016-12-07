<?php
/*
Данные с сервера:

поле с основным контентом - id=main_div

наименование - class=name
производитель - class=company
диагональ экрана - class=screen
оперативная память - class=RAM
цвет - class=color
описание товара - class=description
цена - class=price
картинка - img

Цели:
1) Создать базу данных
2) Создать запрос на получение данных из БД
3) Создать вывод данных из базы данных.
4) Формирование html страницы из полученных с бд данных

SELECT * FROM `products` WHERE `company`='apple' - для запросов some
*/

 /*
$query="SELECT * FROM `products` WHERE `Companie`='".$_POST['companie']."'";

$_POST['Companie']
$_POST['max_price']

$query="SELECT * FROM `products` WHERE 1";

if (isset($_POST['Companie']))
// ($_POST['Companie']!=null)
 $query .= " AND `Companie`='".$_POST['Companie']."'";
if (isset($_POST['max_price']))
 $query .= " AND `Price` < ".$_POST['max_price'];

//Если есть только фильтр по Companie="Apple"
$query="SELECT * FROM `products` WHERE 1 AND `Companie`='Apple'"

//Если есть только фильтр по Companie="Apple" и по цене <1000
echo '<img src="products/ima.jpg">';

echo "<p>".$text."</p>";
echo '<p>$text</p>';

$_POST['Companie'] //может хранить массив
$_POST['max_price'] //может хранить только одно значение

$query="SELECT * FROM `products` WHERE 1";

if (isset($_POST['Companie']))
// ($_POST['Companie']!=null)
 $query .= " AND `Companie` IN (".implode(",", $_POST['Companie']).")";
if (isset($_POST['max_price']))
 $query .= " AND `Price` < ".$_POST['max_price'];

implode(",",array); // Формирует строку из массива

//Если есть только фильтр по Companie="Apple"
$query="SELECT * FROM `products` WHERE 1 AND `Companie` in ('Apple','Asus')";

//Если есть только фильтр по Companie="Apple" и по цене <1000
$query="SELECT * FROM `products` WHERE 1 AND `Companie` in ('Apple','Asus') AND `Price` < 1000";
*/
// Посылка запроса в БД и получение данных
//Формирование списка клиентов

//1) Формирование запроса из полученных данных от клиента

//Если how_many=all - выводить все товары из БД
// если how_many=some - использовать данные фильтра






											// ЗАПРОС
		//Подключение файла конфигурации

		require_once( "config.php" ); 
		
		

		//перменные для подключения к базе данных - 1
		$link=mysqli_connect("localhost", "root", "", "formbase");
		//Запрос
		//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //запрос -2
		
	//Начало фильтров
$query="SELECT * FROM `products` WHERE 1";
                  //фильтр company
if (isset($_POST['company']))
// ($_POST['Companie']!=null)
 $query .= " AND `company` IN (".implode(",", $_POST['company']).")";
                  //фильтр screen
                  //фильтр RAM
                  //фильтр color
if (isset($_POST['color']))
 $query .= " AND `color`='".$_POST['color']."'";				  
                  //фильтр max price
if (isset($_POST['max_price']))
 $query .= " AND `price` < ".$_POST['max_price'];
                  //фильтр min price
 if (isset($_POST['min_price']))
 $query .= " AND `price` > ".$_POST['min_price'];	
		
		//Послыка запроса к БД, ответ передаем переменной $array - 3
		$array=mysqli_query($link, $query);
		//разбираем ответ БД на асоциативный массив и передаем его переменной $array2
		while($array2=mysqli_fetch_array($array))
		//и пока в переменной $array есть данные для формирования массива 
		//dsgjkyztv cktle.obq rjl
		{

			echo '<tr>

			<td style="width: 212px;"><b>'.$array2['ID'].') '.$array2['name'].'</b></td>

			<td style="width: 112px;">'.$array2[2].'</td>

			<td style="width: 130px;">'.$array2[3].'</td>
			
			<td style="width: 130px;">'.$array2[4].'</td>
			
			<td style="width: 130px;">'.$array2[5].'</td>
			
			<td style="width: 130px;">'.$array2[6].'</td>
			
			<td style="width: 130px;">'.$array2[7].'</td>
			
			<td style="width: 130px;"><img src="'.$array2['image'].'"></td>
			
			

			</tr>';
			
			//формирование строки таблицы <tr><td></td><td></td><td></td></tr>
		}
// Формирование HTML страницы из полученных с БД данных


?>

