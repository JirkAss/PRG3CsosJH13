<?php
mb_internal_encoding("UTF-8");


require_once '../bootstrap.php';


$test =   new controller();
$view = $test->ukazMain();

echo $view;





echo '</body></html>';
?>