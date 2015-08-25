<?php
require_once '../Model/conexion.php';
include('session.php');
echo $member_name = $_POST['member_name'];
echo $member_pass = $_POST['member_pass'];
echo $memeber_role = $_POST['member_role'];
//echo date("Y-m-d", mktime(0, 0, 0, date("m", $date), date("d", $date), date("Y", $date)));

$query = ("INSERT INTO member(username, password, role) VALUES ('$member_name','$member_pass',$memeber_role)");
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header("Location: ../View/profile.php");