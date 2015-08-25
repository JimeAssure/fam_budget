<?php

require_once './Model/conexion.php';
$query = 'SELECT day_to_pay, name '
        . 'FROM regular_egress, category '
        . 'WHERE Category_idCategory = idCategory;';
$result = mysql_query($query, $connection) or die('Consulta fallida: ' . mysql_error());

$array_days = array();
$array_categories = array();

while ($line = mysql_fetch_row($result)) {
    $array_days[] = $line[0];
    $array_categories[] = $line[1];
}
       

for ($i = 0; $i < count($array_days); $i++) {
    $day = mktime(0, 0, 0, date("m")  , $array_days[$i], date("Y"));
    $day = date("d-m-Y", $day);
    $today = date("d-m-Y");
    
    $dif = (strtotime($day) - strtotime($today))/86400;
    
    if ($dif <= 2 && $dif >= 0)
    echo "ALERTA";
}


/*
// Set timezone
date_default_timezone_set('UTC');

// Start date
$date = date("Y-m-d");
// End date
$end_date = '2020-12-31';

$dia_hoy = date("d");

while (strtotime($date) <= strtotime($end_date)) {
    if (date('d', strtotime(str_replace('-', '/', $date))) == 10) {
        echo $date . "<br />";
    }
    $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
}
?>



$array_dias = [1, 11, 30];

for ($i = 0; $i < count($array_dias); $i++) {
    echo $array_dias[$i]."<br/>";
    
    
    $dia = mktime(0, 0, 0, date("m")  , $array_dias[$i], date("Y"));
    echo $dia = date("d-m-Y", $dia); 
    echo "<br/>"; 
    
    $dia_hoy = mktime(0, 0, 0, 9 , 1, 2015);
    echo $dia_hoy = date("d-m-Y", $dia_hoy);
    echo "<br/>";
    
    
    $dif = abs((strtotime($dia) - strtotime($dia_hoy))/86400);
    
    
    echo "dif".$dif;
    echo "<br/>";
    
    
    
    
}*/