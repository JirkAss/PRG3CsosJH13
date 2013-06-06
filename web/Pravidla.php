<?php
session_start();
mb_internal_encoding("UTF-8");


ini_set( "mbstring.func_overload" , 3 );
mb_internal_encoding( "utf-8" );
mb_http_output( "utf-8" );
class controller
{
public $data = array("title" => ""
        
    );
        public function ukazListu()
    {
        extract($this->data);
        require_once "../src/view/sabLista.php";
    }
     } 
$test =   new controller();
$view = $test->ukazListu();

echo $view;

echo "<h1>";
echo "$nazevtematu";
echo "</h1>";



echo "</body></html>";
?>