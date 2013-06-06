<?php
session_start();
mb_internal_encoding("UTF-8");
if(isset($_POST['go'])){
//jestli tlačítko bylo zmačknuté tak jdi dál, jinak budete přesměrování na stránku pro registraci nového uživatele
    
    if(isset($_POST['nickname']))
    {
        $nickname = stripslashes(htmlspecialchars(trim($_POST['nickname'])));
        if($nickname == '')
        {
                unset($nickname);
        }
    }
//uložime do proměnné $login login, který uživatel zadál ve formuláři, 
//a hned ji ošetříme několika funkcemi, aby ani tagy ani skripty nefungovali a odstraníme mezery ( trim ) 
//Jestli je proměnná prázdna tak ji odstraníme.


    if(isset($_POST['password']))
    {
        $password = stripslashes(htmlspecialchars(trim($_POST['password'])));
        if($password == '')
        {
                unset($password);
        }
    }
//uložime do proměnné $heslo heslo, které uživatel zadál ve formuláři, 
//a hned ji ošetříme několika funkcemi, aby ani tagy ani skripty nefungovali a odstraníme mezery ( trim ) 
//Jestli je proměnná prázdna tak ji odstraníme.


//V případě, že jakákoli proměnná je prázdna, zastavíme skript a zobrazime hlášení        
    if(empty($nickname) or empty($password))
    {
      
        exit("Vyplňte všechna pole");
    }

//Vložíme soubor s připojením k databázi. ( musí se nacházet ve stejné složce )        
    require_once '../model/db.php';

//Ověřime, zda máme záznam v tabulce s zadaným loginem    
    $q1 = mysql_query("SELECT `id_user` FROM `user` WHERE `nickname`='".$nickname."'");
    if(!$q1) { echo mysql_error() . ' - ' . mysql_errno(); }
    else {
        if(mysql_num_rows($q1)==1){
//V případě, že máme, vložime id tohoto uživatele do pole
            
            $r1 = mysql_fetch_assoc($q1);
//A vybereme data z tabulky s tímto id a ověřime, zda je správně zadané heslo
            
            $q2 = mysql_query("SELECT * FROM `user` WHERE `id_user`='".$r1['id_user']."' AND `password`='".$password."'");
            if(!$q2) { echo mysql_error() . ' - ' . mysql_errno(); }
            else {
//Jestli je všechno správně, tak do sessions uložime identifikator uživatele a jméno, tyto proměnné budou použité v souboru index.php
                $r2 = mysql_fetch_assoc($q2);
                $_SESSION['id_user'] = $r2['id_user'];
                $_SESSION['nickname'] = $r2['nickname'];
//Budete přesměrování na hlavní stránku
                header("Location: ../../web/index.php");
            }
        } else {
//Jinak zobrazime hlášení
            exit('Uživatel s tímto uživatelským jménem neexistuje.');
        }
    }
    
} else { header("Location: ".$_SERVER['SERVER_ROOT']."web/login.php"); }

?>