<?php

require_once( "config.php" ); 
//перменные для подключения к базе данных - 1
$link=mysqli_connect("localhost", "root", "", "formbase");
//Запрос
	//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //запрос -2
	//Начало фильтров
$query="SELECT * FROM `products` WHERE 1";
                  //фильтр company
/*if (isset($_POST['company']))
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
	*/	
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
// Формирование HTML страницы из полученных с БД данных*/


?>

