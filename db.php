<?php

$DBSERVER = 'localhost';
$DBUSER = 'root';
$DBPASS = '1453';

$DB = 'forum';

$link = mysql_connect($DBSERVER,$DBUSER,$DBPASS) or die ('Nemůžu se připojit');
mysql_select_db($DB,$link) or die ('I cannot select DB');
mysql_query("SET NAMES utf8");
?>
