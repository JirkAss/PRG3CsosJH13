<!DOCTYPE html>
<!-- Šablona je IN PROGRESS (J) -->
<html>

<head>
    <title>Registrace</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    <link rel="stylesheet" type="text/css" href="css/css1.css">

    
</head>
    
    <body>
        <strong>Toto je šablona Registrace sabReg.php</strong>
        <h1>Registrace nového uživatele</h1>
        <form action="ulozeni.php" method="POST">
<!--  ulozeni.php je skript pro přidávaní nových uživatelů do databáze, tzn. po klíknutí na tlačítko Ok se data pošlou do tohoto souboru metodou $_POST  -->
    
        <div>
            <label for="nickname">Nickname:</label>
        </div> 

        <div>
            <input type="text" name="nickname">
        </div>
<!--  Do textového pole se jménem name ( name="nickname" ) nový uživatel zadá svoje nickname  -->

        <div>
            <label for="e-mail">E-mail:</label>
        </div>

        <div>
            <input type="text" name="e-mail">
        </div>
<!--  Do textového pole se jménem email ( name="e-mail" ) nový uživatel zadá svůj e-mail  -->
    
        <div>
            <label for="password">Heslo:</label>
        </div>

        <div>
            <input type="password" name="password">
        </div>
<!--  Do pole se jménem heslo ( name="password" ) nový uživatel zadá svoje heslo  -->

        <div>
            <input type="submit" name="go" value="Registrovat">
        </div>
<!--  tlačítko ( type="submit" ) odesíla data do souboru pridavani.php  -->

</form>

<div class="reg"> <a href="index.php">Přihlásit se</a></div>
