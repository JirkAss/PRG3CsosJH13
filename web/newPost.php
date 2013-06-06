<?php
mb_internal_encoding("UTF-8");


require_once '../src/bootstrap.php';
echo 'Zobrazuješ newPost.php';




$test =   new controller();
$view = $test->ukaznewPost();



echo $view;
echo '</body></html>';
?>
