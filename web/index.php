<?php
mb_internal_encoding("UTF-8");


require_once '../src/bootstrap.php';


$test =   new controller();
$view = $test->ukazMain();

echo $view;





echo '</body></html>';
/*
 * TODO: 
 * Diakritika u názku témat
 * na všech stránkách kromě indexu nezobrazovat seznam témat
 * formátování seznamu témat
 * Nadpis tématu v jeho souboru
 * Mazání témat
 * 
 */
?>
