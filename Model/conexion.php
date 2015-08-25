<?php
$connection =  mysql_connect('localhost', 'root', '');
if (!$connection) {
    die('CAN NOT CONNECT: ' . mysql_error());
}
mysql_select_db('fam_budget') or die('Data Base Not Found');

/*
// Realizar una consulta MySQL
$query = 'SELECT * FROM member';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($result);
 * 
 */