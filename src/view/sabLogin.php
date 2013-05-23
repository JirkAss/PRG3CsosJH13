<!DOCTYPE html>
<!-- Šablona je IN PROGRESS (J) -->
<html>
    <head lang="cs">
        <meta name="robots" content="Index, Follow" />
        <meta charset="UTF-8">
        <meta name="keywords" content="fórum forum diskuze lidé" />
        <meta name="description" content="Fórum o všem, co chceš" />
        <meta name="author" content="Zdeněk Potměšil, Jiří Poláček" />
        <link href="css/css1.css" rel="stylesheet" type="text/css" />
        
        
        <title>Login</title>
    </head>
    <body>
        <div id="hrana">
            <strong>Toto je šablona Loginu sabLogin.php</strong>
            <div id="wrapper">
          
         <h1>Přihlašte se</h1>
 <form action=\"overeni.php\" method=\"POST\">
<!--  overeni.php je skript pro ověření zadaných dat, tzn. po klíknutí na tlačítko Ok se data pošlou do tohoto souboru metodou POST  -->

    <div><label for="nickname">Uživatelské jméno:</label></div>
    <div><input type="text" name=\"nickname\"></div>
<!--  Do textového pole se jménem login ( name=\"nickname\" ) uživatel zadá svůj login  -->
    <br />
    <div><label for="password">Heslo:</label></div>
    <div><input type="password" name=\"password\"></div>
<!--  Do pole se jménem heslo ( name=\"password\" ) uživatel zadá svoje heslo  -->

    <div><input type="submit" name=\"go\" value=\"Login\"></div>
<!--  tlačítko ( type=\"submit\" ) odesíla data do souboru overeni.php  -->
<a href="#openModal"><i>Chci se registrovat</i></a>
            </div>
         

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<strong>Toto je šablona Registrace sabReg.php</strong>
        <h1>Registrace nového uživatele</h1>
        <form action="ulozeni.php" method="POST">
<!--  pridavani.php je skript pro přidávaní nových uživatelů do databáze, tzn. po klíknutí na tlačítko Ok se data pošlou do tohoto souboru metodou $_POST  -->
    
        <div>
            <label for="nickname">Nickname:</label>
        </div> 

        <div>
            <input type="text" name="nickname">
        </div>
<!--  Do textového pole se jménem name ( name="nickname" ) nový uživatel zadá svoje nickname  -->

        <div>
            <label for="e-mail">e-mail:</label>
        </div>

        <div>
            <input type="text" name="e-mail">
        </div>
<!--  Do textového pole se jménem login ( name="e-mail" ) nový uživatel zadá svůj e-mail  -->
    
        <div>
            <label for="password">Heslo:</label>
        </div>

        <div>
            <input type="password" name="password">
        </div>
<!--  Do pole se jménem heslo ( name="password" ) nový uživatel zadá svoje heslo  -->

        <div>
            <input type="submit" name="go" value="Ok">
        </div>
<!--  tlačítko ( type="submit" ) odesíla data do souboru pridavani.php  -->

</form>

<div class="reg"> <a href="index.php">přihlásit se</a></div>
	</div>
</div>
</form>
</div>   
            
        </div>
        
        
    </body>
    
    
    
</html>