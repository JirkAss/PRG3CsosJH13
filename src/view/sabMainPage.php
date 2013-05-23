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
 
 echo "<strong>".$_SESSION['nickname']."</strong>"; 
 
 echo '         <span class="logout"><a href="../src/controller/logout.php">Logout</a></span>';
 
} else {
//V případě, že tyto proměnné jsou prázdne, zobrazime přihlašovací formulář a odkaz s prázdným atributem href    
 echo '<span class prihl><a href="login.php">Přihlaste se</a></span>';
 
 echo '<span class="reg"><a href="registration.php">Registrace</a></span>'; 
}
?>
            
            <!-- ####################################################### -->
        </div>
        <strong>Toto je šablona Hlavního vzhledu sabMainPage.php</strong>
        
        <div id="obal">
            
        </div>
        
    </body>