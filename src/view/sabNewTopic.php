<?php
session_start();
 require_once '../src/view/sabLista.php';
?>
<head lang="cs">
        <meta name="robots" content="Index, Follow" />
        <meta charset="UTF-8">
        <meta name="keywords" content="fórum forum diskuze lidé" />
        <meta name="description" content="Fórum o všem, co chceš" />
        <meta name="author" content="Zdeněk Potměšil, Jiří Poláček" />
        <link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<h1>Nové téma</h1>

<form action="../src/controller/novetema.php" method="POST">
    Název tématu: <br /><input type="text" name="nazevtematu"><br /><br />
    Popisek<br />
    <textarea rows="20" cols="80" name="popisek"></textarea>
    
    <div>
    <input type="submit" name="sub" value="Vložit">
    </div>
</form>
