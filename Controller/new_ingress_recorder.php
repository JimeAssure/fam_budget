<?php
require_once '../Model/conexion.php';
include('session.php');
echo $amount = $_POST['ingress_amount'];
echo $date = $_POST['ingress_date'];

echo $date = date('Y-m-d', strtotime(str_replace('-','/', $date)));

//echo date("Y-m-d", mktime(0, 0, 0, date("m", $date), date("d", $date), date("Y", $date)));

$query = ("INSERT INTO ingress(member_idmember, amount, date) VALUES ($idmember_session,$amount,'$date')");
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header("Location: ../View/profile.php");