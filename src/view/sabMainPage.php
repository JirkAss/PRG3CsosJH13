<?php
session_start();
?>
<!DOCTYPE html>
<!-- Šablona je IN PROGRESS (J) -->
<html>
    <head lang="cs">
        <meta name="robots" content="Index, Follow" />
        <meta charset="UTF-8">
        <meta name="keywords" content="fórum forum diskuze lidé" />
        <meta name="description" content="Fórum o všem, co chceš" />
        <meta name="author" content="Zdeněk Potměšil, Jiří Poláček, Radek Oberreiter" />
        <link href="css/css1.css" rel="stylesheet" type="text/css" />
        
        
        <title>sabMainPage</title>
    </head>

    <body>
        
            <!-- ####################################################### -->
            
                    <!-- Tady budou údaje o uživateli -->
                    <?php
//ověřujeme zda proměnné jméno a id jsou prázde nebo ne
if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{
//V případě, že nejsou tak zobrazime jméno uživatele a odkaz, který je schovaný, jesli uživatel není přihlášený
        require_once '../src/view/sabLista.php';

    
} else {
//V případě, že tyto proměnné jsou prázdne, zobrazime přihlašovací formulář a odkaz s prázdným atributem href    
 echo '<span class prihl><a href="login.php">Přihlaste se</a></span>';
 
 
}
?>
                <!--    <span class="link">
                        <a href="newtopic.php">Nové téma</a>
                    </span> -->
                
            
            <!-- ####################################################### -->
              
        
        <div id="obal">
            <?php
            
            if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{ 
require_once '../src/controller/zobraztema.php';
                //require_once 'sabTemata.php';
} else {
 echo '<div id="reqLog"><center>Pro zobrazení fóra je nutné se přihlásit!</center></div>';
 
}
?>
        </div>
        
   
