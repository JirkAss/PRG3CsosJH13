<?php
mb_internal_encoding( 'utf-8' );
mb_http_output( 'utf-8' );

require_once'../src/model/db.php';

$result = mysql_query('SELECT name FROM topic');
//while ($row = mysql_fetch_assoc($result)) {$array[] = $row;} 
 while($row = mysql_fetch_assoc($result)) {
     echo '<div id="tema"';
   echo "<br />";
   foreach($row as $_key => $_value) {
     echo '<a href="';
     echo 'tema/';
     echo $_value;
     echo  '.php">';
     echo $_value;
     echo '</a>';
     echo '</div>';

   }}
?>
