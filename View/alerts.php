<h6>PAY ATTENTION</h6>
<br />
<?php
require_once '../Model/conexion.php';
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
    $day = mktime(0, 0, 0, date("m"), $array_days[$i], date("Y"));
    $day = date("d-m-Y", $day);
    $today = date("d-m-Y");

    $dif = (strtotime($day) - strtotime($today)) / 86400;

    if ($dif <= 2 && $dif >= 0)
        echo "<h7>ALERT you have to pay the <u>" . $array_categories[$i] . "</u> bill</h7>";
}
?>