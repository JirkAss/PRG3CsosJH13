<?php
mb_internal_encoding( 'utf-8' );
mb_http_output( 'utf-8' );

require_once'../model/db.php';

$result = mysql_query('SELECT name FROM topic');
while ($row = mysql_fetch_assoc($result)) {$array[] = $row;} 

echo $result;  
?>
