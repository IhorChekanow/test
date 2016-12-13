<?php


require_once( "config.php" ); 
//перменные для подключения к базе данных - 1
$link=mysqli_connect("localhost", "root", "", "formbase");
//Запрос
	//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //запрос -2
	//Начало фильтров
$query="SELECT * FROM `notebooks` WHERE 1";
if ($_POST['how_many']!='all')
{
	//фильтр company
	if (isset($_POST['companie']))
		$query .= " AND `company` IN ('".implode("','", $_POST['companie'])."')"; ///!!!!!! Обрати внимание на ковічки
					  //фильтр proc
	if (isset($_POST['proc']))
		$query .= " AND `proc` IN ('".implode("','", $_POST['proc'])."')";
					  //фильтр core
	if (isset($_POST['core']))
		$query .= " AND `core` IN ('".implode("','", $_POST['core'])."')";	
					  //фильтр RAM
	if (isset($_POST['memory_max']))
	 $query .= " AND `memory` < ".$_POST['memory_max'];
					  //фильтр min price
	 if (isset($_POST['memory_min']))
	 $query .= " AND `memory` > ".$_POST['memory_min'];
	/*if (isset($_POST['ram']))
		$query .= " AND `RAM` IN ('".implode("','", $_POST['ram'])."')";	*/				  
					  //фильтр color
					  if (isset($_POST['color']))
	 $query .= " AND `color`='".$_POST['color']."'";				  
					  //фильтр max price
	if (isset($_POST['price_max']))
	 $query .= " AND `price` < ".$_POST['price_max'];
					  //фильтр min price
	 if (isset($_POST['price_min']))
	 $query .= " AND `price` > ".$_POST['price_min'];	

}
echo $query;
	
echo '<h3 class="products_type">Notebooks</h3>
	<ul class="products_list">';
		//Послыка запроса к БД, ответ передаем переменной $array - 3
		$array=mysqli_query($link, $query);
		//разбираем ответ БД на асоциативный массив и передаем его переменной $array2
		while($array2=mysqli_fetch_array($array))
		//и пока в переменной $array есть данные для формирования массива 
		//dsgjkyztv cktle.obq rjl
		{
			echo '<li class="poduct">
					<div class="product_view">
						<img src="'.$array2['image'].'" alt="">
					</div>
					<div class="product_text">
						<div class="product_name">
							<span class="product_title">РќР°РёРјРµРЅРѕРІР°РЅРёРµ:</span>
							<span class="name">'.$array2['name'].'</span>
						</div>
						<div class="product_companie">
							<span class="product_title">РџСЂРѕРёР·РІРѕРґРёС‚РµР»СЊ:</span>
							<span class="companie">'.$array2['company'].'</span>
						</div>
						<div class="product_proc">
							<span class="product_title">Р”РёР°РіРѕРЅР°Р»СЊ СЌРєСЂР°РЅР°:</span>
							<span class="proc">'.$array2['proc'].'</span>
						</div>
						<div class="product_core">
							<span class="product_title">Р”РёР°РіРѕРЅР°Р»СЊ СЌРєСЂР°РЅР°:</span>
							<span class="core">'.$array2['core'].'</span>
						</div>
						<div class="product_memory">
							<span class="product_title">РћРїРµСЂР°С‚РёРІРЅР°СЏ РїР°РјСЏС‚СЊ:</span>
							<span class="memory">'.$array2['memory'].'</span>
						</div>
						<div class="product_color">
							<span class="product_title">Р¦РІРµС‚:</span>
							<span class="color">'.$array2['color'].'</span>
						</div>
						<div class="product_description">
							<span class="product_title">РћРїРёСЃР°РЅРёРµ С‚РѕРІР°СЂР°:</span>
							<p class="description">'.$array2['description'].'</p>
						</div>
						<div class="product_price">
							<span class="product_title">Р¦РµРЅР°:</span>
							<span class="price">'.$array2['price'].'</span>
						</div>
					</div>
				</li>';
			
			
			//формирование строки таблицы <tr><td></td><td></td><td></td></tr>
		}
echo '</ul>';




?>

