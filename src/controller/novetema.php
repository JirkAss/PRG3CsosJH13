<?php

class novetema
{
    private $repository;
    private $pdo;
    
    public function __construct()
    {        
        $this->pdo    =   new \PDO(
                                'mysql:host=localhost;dbname=forum', 
                                'kor3k', 
                                'y11tbJSjl', 
                                array(
                                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                                    )
                               );         
        
        $this->repository   =   new UserRepository( $this->pdo );
    }
}
if(isset($_POST['submit'])){
    
    
    
     if(isset($_POST['nazevtematu']))
         
    {
        $nazevtematu = stripslashes(htmlspecialchars(trim($_POST['nazevtematu'])));
        if($name == '')
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
            $q2= mysql_query("INSERT INTO `topic` (`nazevtematu`,`popisek`) VALUES('".$nazevtematu."'.'".$popisek."') ");
            if(!$q2) {echo mysql_error() . ' - ' . mysql_errno();
        } 
        
        }
    }
}



