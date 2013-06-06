<?php

//V případě, že nejsou tak zobrazime jméno uživatele a odkaz, který je schovaný, jesli uživatel není přihlášený
 
echo '<link href="css/css1.css" rel="stylesheet" type="text/css" />';
 echo '<div id="hornilista">  ' ;

 echo "Ahoj <strong>".$_SESSION['nickname']."</strong>"; 
 
 echo '         <span class="logout"><a href="../src/controller/logout.php">Logout </a></span>';
 echo '<span><a href="rozhrani.php">Uživatelské Rozhraní</a></span>';
 echo '<span class="link">
                        <a href="newtopic.php">Nové téma</a>
                    </span>';
echo'<a href="../web/index.php">Domů</a>';
echo'</div>';
?>
