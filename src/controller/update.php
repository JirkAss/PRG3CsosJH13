<?php
mb_internal_encoding("UTF-8");
require_once '../bootstrap.php';
if(isset($_POST['go'])){    //jestli tlačítko bylo zmačknuté tak jdi dál, jinak budete přesměrování na stránku pro registraci nového uživatele

    if(isset($_POST['nickname']))
    {
        $nickname = stripslashes(htmlspecialchars(trim($_POST['nickname'])));
        if($nickname == '')
        {
                unset($nickname);
        }
    }
//uložime do proměnné $name jméno, které uživatel zadál ve formuláři, 
//a hned ji ošetříme několika funkcemi, aby ani tagy ani skripty nefungovali a odstraníme mezery ( trim ) 
//Jestli je proměnná prázdna tak ji odstraníme.

    
    if(isset($_POST['e-mail']))
    {
        $mail = stripslashes(htmlspecialchars(trim($_POST['e-mail'])));
        if($mail == '')
        {
                unset($mail);
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


//V případě, že jakákoli proměnná je prázdna, zastavíme skript a vyvedeme hlášení    
    if(empty($nickname) or empty($mail) or empty($password))
    {
        exit("Vyplňte všechna pole");
    }


//Vložíme soubor s připojením k databázi. ( musí se nacházet ve stejné složce )    
    require_once '../model/db.php';

//Ověřujeme, zda jíž není uživatel se stejným loginem    
    $q1 = mysql_query("SELECT * FROM `user` WHERE `e-mail`='".$mail."'");
    if(!$q1) { echo mysql_error() . ' - ' . mysql_errno(); }
    else {
//Jestli existuje tak vyvedeme hlášení
        if(mysql_num_rows($q1)==1){
            exit("Uživatelské jméno je obsazené, vyberte si jiné");
        } else {
//V případě, že není tak vložíme data o novém uživateli do databáze
            $q2 = mysql_query("UPDATE  user SET nickname = .$nickname., e-mail= .$mail. , password= .$password. WHERE 'id_user' = {$_SESSION['id_user']} ");
            if(!$q2) { echo mysql_error() . ' - ' . mysql_errno(); }
            else {
               /* echo "Děkujeme za registraci, nyní se můžete <a href=\"index.php\">přihlásit</a>.";*/
                header("Location: ".$_SERVER['SERVER_ROOT']."../../web/thxReg.php");
                
            }
        }
    }
    
} else { header("Location: ".$_SERVER['SERVER_ROOT']."../../web/login.php"); }
?>