<?php
mb_internal_encoding("UTF-8");


require_once '../src/bootstrap.php';
echo 'Zobrazuješ ThxReg.php';

$test =   new controller();
$view = $test->ukazThxReg();

echo $view;
echo '</body></html>';
?>
