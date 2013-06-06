<?php

$DBSERVER = '127.0.0.1';
$DBUSER = 'USER';
$DBPASS = 'PASSWORD';

$DB = 'forum';

$link = mysql_connect($DBSERVER,$DBUSER,$DBPASS) or die ('Nemůžu se připojit');
mysql_select_db($DB,$link) or die ('Nelze vybrat databázi');
mysql_query("SET NAMES utf8");
?>
