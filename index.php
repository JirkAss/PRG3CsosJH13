<?php
session_start();
//Celý postup funguje na sessions. Právě v session se ukládají data uživatele, zatímco se nacházi na stránkach. Je důležite spustit sessions na začátku stránky!  
?>
<html>

<head>
    <title>Přihlašení uživatele</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="web/css/css1.css">
</head>

<body>
    <?php
//ověřujeme zda proměnné jméno a id jsou prázde nebo ne
if(!empty($_SESSION['nickname']) AND !empty($_SESSION['id_user']))
{
//V případě, že nejsou tak zobrazime jméno uživatele a odkaz, který je schovaný, jesli uživatel není přihlášený
 
 echo "<h1>Ahoj ".$_SESSION['nickname']."</h1>"; 
 echo   "ID uživatele je ". $_SESSION['id_user'];
 
 echo '         <div class="logout"><a href="logout.php">Logout</a></div>';
 
} else {
//V případě, že tyto proměnné jsou prázdne, zobrazime přihlašovací formulář a odkaz s prázdným atributem href    
 echo '<div id="form">';
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

    <div><input type=\"submit\" name=\"go\" value=\"Login\"></div>
<!--  tlačítko ( type=\"submit\" ) odesíla data do souboru overeni.php  -->

</form>
</div>
 ";  
 echo '</div>';
 echo '<div class="reg"><a href="registration.php">registrace</a></div>'; 
}
?>
</body>
</html>