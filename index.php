<?php
session_start();
//Celý postup funguje na sessions. Právě v session se ukládají data uživatele, zatímco se nacházi na stránkach. Je důležite spustit sessions na začátku stránky!  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Přihlašení uživatele</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

<style>

.back{
    font-size:10pt;
    margin-top:20px;
}

</style>
    
</head>

<body>
    <?php
//ověřujeme zda proměnné jméno a id jsou prázde nebo ne
if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{
//V případě, že nejsou tak zobrazime jméno uživatele a odkaz, který je schovaný, jesli uživatel není přihlášený
 
 echo "<h1>Ahoj ".$_SESSION['nickname']."</h1> 
 <p>Tyto <a href=\"http://www.complux.eu/cz/\">stránky</a> můžou navštívit jen registrované uživatele</p>";    
} else {
//V případě, že tyto proměnné jsou prázdne, zobrazime přihlašovací formulář a odkaz s prázdným atributem href    
 
 echo "
 <h1>Přihlaste se</h1>
<form action=\"overeni.php\" method=\"POST\">
<!--  overeni.php je skript pro ověření zadaných dat, tzn. po klíknutí na tlačítko Ok se data pošlou do tohoto souboru metodou POST  -->

    <div><label for=\"nickname\">nickname:</label></div>
    <div><input type=\"text\" name=\"nickname\"></div>
<!--  Do textového pole se jménem login ( name=\"nickname\" ) uživatel zadá svůj login  -->

    <div><label for=\"password\">Heslo:</label></div>
    <div><input type=\"password\" name=\"password\"></div>
<!--  Do pole se jménem heslo ( name=\"password\" ) uživatel zadá svoje heslo  -->

    <div><input type=\"submit\" name=\"go\" value=\"Ok\"></div>
<!--  tlačítko ( type=\"submit\" ) odesíla data do souboru overeni.php  -->

</form>
 ";
 
 echo "Ahoj návtěvníku. Tyto <a href=\"#\">stránky</a> můžou navštívit jen registrované uživatele";        
 echo '<div class="back"><a href="registration.php">registrace</a></div>'; 
}
?>
</body>
</html>