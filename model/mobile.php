<?php
/*
������ � �������:

���� � �������� ��������� - id=main_div

������������ - class=name
������������� - class=company
��������� ������ - class=screen
����������� ������ - class=RAM
���� - class=color
�������� ������ - class=description
���� - class=price
�������� - img

����:
1) ������� ���� ������
2) ������� ������ �� ��������� ������ �� ��
3) ������� ����� ������ �� ���� ������.
4) ������������ html �������� �� ���������� � �� ������

SELECT * FROM `products` WHERE `company`='apple' - ��� �������� some
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

//���� ���� ������ ������ �� Companie="Apple"
$query="SELECT * FROM `products` WHERE 1 AND `Companie`='Apple'"

//���� ���� ������ ������ �� Companie="Apple" � �� ���� <1000
echo '<img src="products/ima.jpg">';

echo "<p>".$text."</p>";
echo '<p>$text</p>';

$_POST['Companie'] //����� ������� ������
$_POST['max_price'] //����� ������� ������ ���� ��������

$query="SELECT * FROM `products` WHERE 1";

if (isset($_POST['Companie']))
// ($_POST['Companie']!=null)
 $query .= " AND `Companie` IN (".implode(",", $_POST['Companie']).")";
if (isset($_POST['max_price']))
 $query .= " AND `Price` < ".$_POST['max_price'];

implode(",",array); // ��������� ������ �� �������

//���� ���� ������ ������ �� Companie="Apple"
$query="SELECT * FROM `products` WHERE 1 AND `Companie` in ('Apple','Asus')";

//���� ���� ������ ������ �� Companie="Apple" � �� ���� <1000
$query="SELECT * FROM `products` WHERE 1 AND `Companie` in ('Apple','Asus') AND `Price` < 1000";
*/
// ������� ������� � �� � ��������� ������
//������������ ������ ��������

//1) ������������ ������� �� ���������� ������ �� �������

//���� how_many=all - �������� ��� ������ �� ��
// ���� how_many=some - ������������ ������ �������






											// ������
		//����������� ����� ������������

		require_once( "config.php" ); 
		
		

		//��������� ��� ����������� � ���� ������ - 1
		$link=mysqli_connect("localhost", "root", "", "formbase");
		//������
		//$query = "SELECT `ID`,`name`,`company`,`screen`,`RAM`, `color`, `description`, `price`, `image` FROM `products`"; //������ -2
		
	//������ ��������
$query="SELECT * FROM `products` WHERE 1";
                  //������ company
if (isset($_POST['company']))
// ($_POST['Companie']!=null)
 $query .= " AND `company` IN (".implode(",", $_POST['company']).")";
                  //������ screen
                  //������ RAM
                  //������ color
if (isset($_POST['color']))
 $query .= " AND `color`='".$_POST['color']."'";				  
                  //������ max price
if (isset($_POST['max_price']))
 $query .= " AND `price` < ".$_POST['max_price'];
                  //������ min price
 if (isset($_POST['min_price']))
 $query .= " AND `price` > ".$_POST['min_price'];	
		
		//������� ������� � ��, ����� �������� ���������� $array - 3
		$array=mysqli_query($link, $query);
		//��������� ����� �� �� ������������ ������ � �������� ��� ���������� $array2
		while($array2=mysqli_fetch_array($array))
		//� ���� � ���������� $array ���� ������ ��� ������������ ������� 
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
			
			//������������ ������ ������� <tr><td></td><td></td><td></td></tr>
		}
// ������������ HTML �������� �� ���������� � �� ������


?>

