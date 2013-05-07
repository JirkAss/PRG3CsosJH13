<?php

$DBSERVER = '172.16.1.204';
$DBUSER = 'potmesil';
$DBPASS = '9412251453';

$DB = 'potmesil';

$link = mysql_connect($DBSERVER,$DBUSER,$DBPASS) or die ('Nemůžu se připojit');
mysql_select_db($DB,$link) or die ('I cannot select DB');
mysql_query("SET NAMES utf8");
?>
