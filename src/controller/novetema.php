<?php
mb_internal_encoding( 'utf-8' );
mb_http_output( 'utf-8' );
if(isset($_POST['sub'])){
    
    
    
     if(isset($_POST['nazevtematu']))
         
    {
        $nazevtematu = stripslashes(htmlspecialchars(trim($_POST['nazevtematu'])));
        if($nazevtematu == '')
        {
                unset($nazevtematu);
        }
    }
    //Vložím proměnou z Postu do proměné $name
       if(isset($_POST['popisek']))
    {
        $popisek = stripslashes(htmlspecialchars(trim($_POST['popisek'])));
        if($popisek == '')
        {
                unset($popisek);
        }
    }
    
    //Vložím proměnou z Postu do proměné $popisek
    
    
     if(empty($nazevtematu) or empty($popisek))
    {
        exit("Vyplňte všechna pole");
    }
    
    //Když nejsou vyplněná všechna pole vyhodí hlášku Vyplňte všechna pole
    
    require_once '../model/db.php';
    
    $q1 = mysql_query("SELECT * FROM `topic` WHERE `name` ='".$nazevtematu."'");
    if(!$q1) { echo mysql_error() . ' - ' . mysql_errno();    
    }
    else {
        if(mysql_num_rows($q1)==1){
            exit("Název tématu je obsazený zkus jiný");
        } else {
            $q2= mysql_query("INSERT INTO `topic` (`name`,`description`) VALUES('".$nazevtematu."' , '".$popisek."') ");
            if(!$q2) {echo mysql_error() . ' - ' . mysql_errno();
        } 
         else {
              $text = 
             '<?php
                 session_start();



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
        require_once "../src/view/sabLista.php";
    }
     } 
$test =   new controller();
$view = $test->ukazMain();

echo $view;

echo "<h1>";
echo "'.$nazevtematu.'";
echo "</h1>";



echo "</body></html>";
?>'
             ;
            
              $soubor=fopen("../../web/".$nazevtematu.".php", "w+");
              fwrite($soubor, $text);
              header("Location: ".$_SERVER['SERVER_ROOT']."../../web/".$nazevtematu.".php");
              

         }
        }
    }
}



