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
        <div id="hornilista">
            <!-- ####################################################### -->
            
                    <!-- Tady budou údaje o uživateli -->
                    <?php
//ověřujeme zda proměnné jméno a id jsou prázde nebo ne
if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{
//V případě, že nejsou tak zobrazime jméno uživatele a odkaz, který je schovaný, jesli uživatel není přihlášený
 
 echo "Ahoj <strong>".$_SESSION['nickname']."</strong>"; 
 
 echo '         <span class="logout"><a href="../src/controller/logout.php">Logout </a></span>';
 echo '<span><a href="rozhrani.php">Uživatelské Rozhraní</a></span>';
 echo '<span class="link">
                        <a href="newtopic.php">Nové téma</a>
                    </span>';
    
} else {
//V případě, že tyto proměnné jsou prázdne, zobrazime přihlašovací formulář a odkaz s prázdným atributem href    
 echo '<span class prihl><a href="login.php">Přihlaste se</a></span>';
 
 
}
?>
                <!--    <span class="link">
                        <a href="newtopic.php">Nové téma</a>
                    </span> -->
                    <span><a href="/PRG3CsosJH134/web/index.php">Domů</a></span>
            
            <!-- ####################################################### -->
        </div>
        
        
        <div id="obal">
            <?php
            if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{ 

                //require_once 'sabTemata.php';
} else {
 echo '<div id="reqLog"><center>Pro zobrazení fóra je nutné se přihlásit!</center></div>';
 
}
?>
        </div>
        
   
