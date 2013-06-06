<?php
session_start();
mb_internal_encoding( 'utf-8' );
mb_http_output( 'utf-8' );
if(isset($_POST['prispevek'])){
    
    
    
     if(isset($_POST['title']))
         
    {
        $title = stripslashes(htmlspecialchars(trim($_POST['title'])));
        if($title == '')
        {
                unset($title);
        }
    }
    //Vložím proměnou z Postu do proměné $name
       if(isset($_POST['body']))
    {
        $body = stripslashes(htmlspecialchars(trim($_POST['body'])));
        if($body == '')
        {
                unset($body);
        }
    }
    
    //Vložím proměnou z Postu do proměné $popisek
    
    
     if(empty($title) or empty($body))
    {
        exit("Vyplňte všechna pole");
    }
    
    //Když nejsou vyplněná všechna pole vyhodí hlášku Vyplňte všechna pole
    
    require_once '../model/db.php';
    
    $q1 = mysql_query("SELECT * FROM `post` WHERE `title` ='".$title."'");
    if(!$q1) { echo mysql_error() . ' - ' . mysql_errno();    
    }
    else {
        if(mysql_num_rows($q1)==1){
            exit("Název tématu je obsazený zkus jiný");
        } else {
            $q2= mysql_query("INSERT INTO `post` (`title`,`body`,`author`) VALUES('".$title."' , '".$body."' , '".$_SESSION['id_user']."') ");
            if(!$q2) {echo mysql_error() . ' - ' . mysql_errno();
        } 
         else {
              header("Location: ".$_SERVER['SERVER_ROOT']."../../web/thxReg.php");
         }
        }
    }
}



