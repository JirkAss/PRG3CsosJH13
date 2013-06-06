<?php
session_start();
mb_internal_encoding("UTF-8");
ini_set( "mbstring.func_overload" , 3 );
mb_http_output( "utf-8" );
class controller
{
public $data = array("title" => "");
        public function ukazMain()
    {
        extract($this->data);
        require_once "../src/view/sabLista.php";
    }
     } 
$test =   new controller();
$view = $test->ukazMain();

echo $view;

echo "<h1>";
echo "lopata";
echo "</h1>";



echo "</body></html>";
?>