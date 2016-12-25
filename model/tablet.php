<?php


require_once( "config.php" ); 
//ïåðìåííûå äëÿ ïîäêëþ÷åíèÿ ê áàçå äàííûõ - 1
$link=mysqli_connect("localhost", "root", "", "formbase");
//Çàïðîñ
	//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //çàïðîñ -2
	//Íà÷àëî ôèëüòðîâ
$query="SELECT * FROM `tablets` WHERE 1";
if ($_POST['how_many']!='all')
{
	//ôèëüòð company
	if (isset($_POST['companie']))
		$query .= " AND `company` IN ('".implode("','", $_POST['companie'])."')"; ///!!!!!! Îáðàòè âíèìàíèå íà êîâ³÷êè
					  //ôèëüòð screen
	if (isset($_POST['screen_max']))
	 $query .= " AND `screen` <= ".$_POST['screen_max'];
					  //ôèëüòð min price
	 if (isset($_POST['screen_min']))
	 $query .= " AND `screen` >= ".$_POST['screen_min'];				  
	/*if (isset($_POST['screen']))
		$query .= " AND `screen` IN ('".implode("','", $_POST['screen'])."')";	*/			  
					  //ôèëüòð RAM
	if (isset($_POST['memory']))
	 $query .= " AND `RAM` IN (".implode(",", $_POST['memory']).")";
	/*if (isset($_POST['ram']))
		$query .= " AND `RAM` IN ('".implode("','", $_POST['ram'])."')";	*/				  
					  //ôèëüòð color
					  if (isset($_POST['color']))
	 $query .= " AND `color`='".$_POST['color']."'";				  
					  //ôèëüòð max price
	if (isset($_POST['price_max']))
	 $query .= " AND `price` < ".$_POST['price_max'];
					  //ôèëüòð min price
	 if (isset($_POST['price_min']))
	 $query .= " AND `price` > ".$_POST['price_min'];	

}
echo $query;
	
echo '<h3 class="products_type">Tablets</h3>
	<ul class="products_list">';
		//Ïîñëûêà çàïðîñà ê ÁÄ, îòâåò ïåðåäàåì ïåðåìåííîé $array - 3
		$array=mysqli_query($link, $query);
		//ðàçáèðàåì îòâåò ÁÄ íà àñîöèàòèâíûé ìàññèâ è ïåðåäàåì åãî ïåðåìåííîé $array2
		while($array2=mysqli_fetch_array($array))
		//è ïîêà â ïåðåìåííîé $array åñòü äàííûå äëÿ ôîðìèðîâàíèÿ ìàññèâà 
		//dsgjkyztv cktle.obq rjl
		{
			echo '<li class="poduct">
					<div class="product_view">
						<img src="'.$array2['image'].'" alt="">
					</div>
					<div class="product_text">
						<div class="product_name">
							<span class="product_title">ÐÐ°Ð¸Ð¼ÐµÐ½Ð¾Ð²Ð°Ð½Ð¸Ðµ:</span>
							<span class="name">'.$array2['name'].'</span>
						</div>
						<div class="product_companie">
							<span class="product_title">ÐŸÑ€Ð¾Ð¸Ð·Ð²Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑŒ:</span>
							<span class="companie">'.$array2['company'].'</span>
						</div>
						<div class="product_screen">
							<span class="product_title">Ð”Ð¸Ð°Ð³Ð¾Ð½Ð°Ð»ÑŒ ÑÐºÑ€Ð°Ð½Ð°:</span>
							<span class="screen">'.$array2['screen'].'</span>
						</div>
						<div class="product_ram">
							<span class="product_title">ÐžÐ¿ÐµÑ€Ð°Ñ‚Ð¸Ð²Ð½Ð°Ñ Ð¿Ð°Ð¼ÑÑ‚ÑŒ:</span>
							<span class="ram">'.$array2['RAM'].'</span>
						</div>
						<div class="product_color">
							<span class="product_title">Ð¦Ð²ÐµÑ‚:</span>
							<span class="color">'.$array2['color'].'</span>
						</div>
						<div class="product_description">
							<span class="product_title">ÐžÐ¿Ð¸ÑÐ°Ð½Ð¸Ðµ Ñ‚Ð¾Ð²Ð°Ñ€Ð°:</span>
							<p class="description">'.$array2['description'].'</p>
						</div>
						<div class="product_price">
							<span class="product_title">Ð¦ÐµÐ½Ð°:</span>
							<span class="price">'.$array2['price'].'</span>
						</div>
					</div>
				</li>';
			
			
			//ôîðìèðîâàíèå ñòðîêè òàáëèöû <tr><td></td><td></td><td></td></tr>
		}
echo '</ul>';




?>

