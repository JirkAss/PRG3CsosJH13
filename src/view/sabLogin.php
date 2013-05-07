<!DOCTYPE html>
<!-- Šablona je IN PROGRESS (J) -->
<html>
    <head lang="cs">
        <meta name="robots" content="Index, Follow" />
        <meta charset="UTF-8">
        <meta name="keywords" content="fórum forum diskuze lidé" />
        <meta name="description" content="Fórum o všem, co chceš" />
        <meta name="author" content="Zdeněk Potměšil, Jiří Poláček" />
        <link href="/web/css/main.css" rel="stylesheet" type="text/css" />
        
        
        <title>Login Pyčo</title>
    </head>
    <body>
        <div id="hrana">
            <strong>Toto je šablona Loginu sabLogin.php</strong>
         <h1>Přihlašte se</h1>
 <form action=\"overeni.php\" method=\"POST\">
<!--  overeni.php je skript pro ověření zadaných dat, tzn. po klíknutí na tlačítko Ok se data pošlou do tohoto souboru metodou POST  -->

    <div><label for=""nickname">nickname:</label></div>
    <div><input type="text" name=\"nickname\"></div>
<!--  Do textového pole se jménem login ( name=\"nickname\" ) uživatel zadá svůj login  -->

    <div><label for="password">Heslo:</label></div>
    <div><input type="password" name=\"password\"></div>
<!--  Do pole se jménem heslo ( name=\"password\" ) uživatel zadá svoje heslo  -->

    <div><input type="submit" name=\"go\" value=\"Login\"></div>
<!--  tlačítko ( type=\"submit\" ) odesíla data do souboru overeni.php  -->

</form>
</div>   
            
        </div>
        
        
    </body>
    
    
    
</html>