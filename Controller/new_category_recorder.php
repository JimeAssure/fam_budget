<?php
require_once '../Model/conexion.php';
include('session.php');
$id_member = $idmember_session;
echo $name = $_POST['category_name'];
echo $type = $_POST['category_type'];

$query = ("INSERT INTO category(member_idmember, name, egress_type) VALUES ($id_member,'$name',$type)");
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

header("Location: ../View/profile.php");