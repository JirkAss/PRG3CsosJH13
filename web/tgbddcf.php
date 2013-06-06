<?php
mb_internal_encoding("UTF-8");


ini_set( "mbstring.func_overload" , 3 );
mb_internal_encoding( "utf-8" );
mb_http_output( "utf-8" );
class controller
{
public $data = array("title" => ""
        
    );
        public function ukazMain()
    {
        extract($this->data);
        require_once "../src/view/sabMainPage.php";
    }
     } 
$test =   new controller();
$view = $test->ukazMain();

echo $view;





echo "</body></html>";
?>