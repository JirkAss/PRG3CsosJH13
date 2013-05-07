<?php
mb_internal_encoding("UTF-8");


require_once '../src/bootstrap.php';
echo 'Zobrazuješ Pindex.php';

$test =   new controller();
$view = $test->ukazLogin();


echo $view;

?>
