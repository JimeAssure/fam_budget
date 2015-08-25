<?php
require_once '../Model/conexion.php';
include('session.php');
echo $amount = $_POST['egress_amount'];
echo $date = $_POST['egress_date'];
echo $id_category = $_POST['category_id'];

echo $date = date('Y-m-d', strtotime(str_replace('-','/', $date)));

//echo date("Y-m-d", mktime(0, 0, 0, date("m", $date), date("d", $date), date("Y", $date)));
//INSERT INTO `egress`(`member_idmember`, `Category_idCategory`, `amount`, `date`) 
//VALUES ([value-1],[value-2],[value-3],[value-4])
$query = ("INSERT INTO egress(member_idmember, Category_idCategory, amount, date) VALUES ($idmember_session,$id_category,$amount,'$date')");
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header("Location: ../View/profile.php");
