<?php
mb_internal_encoding("UTF-8");


require_once '../src/bootstrap.php';







$test =   new controller();
$view = $test->ukaznewTopic();


echo $view;
echo '</body></html>';
?>
