<?php
require_once '../Model/conexion.php';
include('session.php');
echo $amount = $_POST['regular_egress_amount'];
echo $day = $_POST['day_to_pay'];
echo $id_category = $_POST['category_id'];
echo $description = $_POST['description'];

$query = ("INSERT INTO regular_egress(member_idmember, amount, day_to_pay, description, Category_idCategory) VALUES ($idmember_session,$amount,$day,'$description', $id_category)");
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header("Location: ../View/profile.php");