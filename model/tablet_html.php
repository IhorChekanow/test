<<<<<<< HEAD:model/tablet.php
<?php


require_once( "config.php" ); 
//��������� ��� ����������� � ���� ������ - 1
$link=mysqli_connect("localhost", "root", "", "formbase");
//������
	//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //������ -2
	//������ ��������
$query="SELECT * FROM `tablets` WHERE 1";
if ($_POST['how_many']!='all')
{
	//������ company
	if (isset($_POST['companie']))
		$query .= " AND `company` IN ('".implode("','", $_POST['companie'])."')"; ///!!!!!! ������ �������� �� ������
					  //������ screen
	if (isset($_POST['screen_max']))
	 $query .= " AND `screen` <= ".$_POST['screen_max'];
					  //������ min price
	 if (isset($_POST['screen_min']))
	 $query .= " AND `screen` >= ".$_POST['screen_min'];				  
	/*if (isset($_POST['screen']))
		$query .= " AND `screen` IN ('".implode("','", $_POST['screen'])."')";	*/			  
					  //������ RAM
	if (isset($_POST['memory']))
	 $query .= " AND `RAM` IN (".implode(",", $_POST['memory']).")";
	/*if (isset($_POST['ram']))
		$query .= " AND `RAM` IN ('".implode("','", $_POST['ram'])."')";	*/				  
					  //������ color
					  if (isset($_POST['color']))
	 $query .= " AND `color`='".$_POST['color']."'";				  
					  //������ max price
	if (isset($_POST['price_max']))
	 $query .= " AND `price` < ".$_POST['price_max'];
					  //������ min price
	 if (isset($_POST['price_min']))
	 $query .= " AND `price` > ".$_POST['price_min'];	

}
echo $query;
	
echo '<h3 class="products_type">Tablets</h3>
	<ul class="products_list">';
		//������� ������� � ��, ����� �������� ���������� $array - 3
		$array=mysqli_query($link, $query);
		//��������� ����� �� �� ������������ ������ � �������� ��� ���������� $array2
		while($array2=mysqli_fetch_array($array))
		//� ���� � ���������� $array ���� ������ ��� ������������ ������� 
		//dsgjkyztv cktle.obq rjl
		{
			echo '<li class="poduct">
					<div class="product_view">
						<img src="'.$array2['image'].'" alt="">
					</div>
					<div class="product_text">
						<div class="product_name">
							<span class="product_title">Наименование:</span>
							<span class="name">'.$array2['name'].'</span>
						</div>
						<div class="product_companie">
							<span class="product_title">Производитель:</span>
							<span class="companie">'.$array2['company'].'</span>
						</div>
						<div class="product_screen">
							<span class="product_title">Диагональ экрана:</span>
							<span class="screen">'.$array2['screen'].'</span>
						</div>
						<div class="product_ram">
							<span class="product_title">Оперативная память:</span>
							<span class="ram">'.$array2['RAM'].'</span>
						</div>
						<div class="product_color">
							<span class="product_title">Цвет:</span>
							<span class="color">'.$array2['color'].'</span>
						</div>
						<div class="product_description">
							<span class="product_title">Описание товара:</span>
							<p class="description">'.$array2['description'].'</p>
						</div>
						<div class="product_price">
							<span class="product_title">Цена:</span>
							<span class="price">'.$array2['price'].'</span>
						</div>
					</div>
				</li>';
			
			
			//������������ ������ ������� <tr><td></td><td></td><td></td></tr>
		}
echo '</ul>';




?>
=======
<h3 class="products_type">Планшеты</h3>
<ul class="products_list">
    
			<li class="product">
				<div class="product_view">
					<img src="products/tablet/tablet_red.jpg" alt="">
				</div>
				<div class="product_text">
					<div class="product_name">
						<h4 class="name">Samsung grand 2</h4>
					</div>
					<div class="product_companie">
						<span class="product_title">Производитель:</span>
						<span class="companie">Samsung</span>
					</div>
					<div class="product_screen">
						<span class="product_title">Диагональ экрана:</span>
						<span class="screen">2</span>
					</div>
					<div class="product_ram">
						<span class="product_title">Оперативная память:</span>
						<span class="ram">2 ГБ</span>
					</div>
					<div class="product_color">
						<span class="product_title">Цвет:</span>
						<span class="ram">черный</span>
					</div>
					<div class="product_description">
						<span class="product_title">Описание товара:</span>
						<p class="description">Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="product_price">
						<span class="product_title">Цена:</span>
						<span class="price">160$</span>
					</div>
				</div>
			</li>
			<li class="product">
				<div class="product_view">
					<img src="products/tablet/tablet_red.jpg" alt="">
				</div>
				<div class="product_text">
					<div class="product_name">
						<h4 class="name">Samsung grand 2</h4>
					</div>
					<div class="product_companie">
						<span class="product_title">Производитель:</span>
						<span class="companie">Samsung</span>
					</div>
					<div class="product_screen">
						<span class="product_title">Диагональ экрана:</span>
						<span class="screen">2</span>
					</div>
					<div class="product_ram">
						<span class="product_title">Оперативная память:</span>
						<span class="ram">2 ГБ</span>
					</div>
					<div class="product_color">
						<span class="product_title">Цвет:</span>
						<span class="ram">черный</span>
					</div>
					<div class="product_description">
						<span class="product_title">Описание товара:</span>
						<p class="description">Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="product_price">
						<span class="product_title">Цена:</span>
						<span class="price">160$</span>
					</div>
				</div>
			</li>
			<li class="product">
				<div class="product_view">
					<img src="products/tablet/tablet_red.jpg" alt="">
				</div>
				<div class="product_text">
					<div class="product_name">
						<h4 class="name">Samsung grand 2</h4>
					</div>
					<div class="product_companie">
						<span class="product_title">Производитель:</span>
						<span class="companie">Samsung</span>
					</div>
					<div class="product_screen">
						<span class="product_title">Диагональ экрана:</span>
						<span class="screen">2</span>
					</div>
					<div class="product_ram">
						<span class="product_title">Оперативная память:</span>
						<span class="ram">2 ГБ</span>
					</div>
					<div class="product_color">
						<span class="product_title">Цвет:</span>
						<span class="ram">черный</span>
					</div>
					<div class="product_description">
						<span class="product_title">Описание товара:</span>
						<p class="description">Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="product_price">
						<span class="product_title">Цена:</span>
						<span class="price">160$</span>
					</div>
				</div>
			</li>
			<li class="product">
				<div class="product_view">
					<img src="products/tablet/tablet_red.jpg" alt="">
				</div>
				<div class="product_text">
					<div class="product_name">
						<h4 class="name">Samsung grand 2</h4>
					</div>
					<div class="product_companie">
						<span class="product_title">Производитель:</span>
						<span class="companie">Samsung</span>
					</div>
					<div class="product_screen">
						<span class="product_title">Диагональ экрана:</span>
						<span class="screen">2</span>
					</div>
					<div class="product_ram">
						<span class="product_title">Оперативная память:</span>
						<span class="ram">2 ГБ</span>
					</div>
					<div class="product_color">
						<span class="product_title">Цвет:</span>
						<span class="ram">черный</span>
					</div>
					<div class="product_description">
						<span class="product_title">Описание товара:</span>
						<p class="description">Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="product_price">
						<span class="product_title">Цена:</span>
						<span class="price">160$</span>
					</div>
				</div>
			</li>
>>>>>>> recover-branch:model/tablet_html.php

