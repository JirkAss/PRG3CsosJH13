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
<h1>Nový příspěvek</h1>

<form action="../src/controller/novyprispevek.php" method="POST">
    Název přízpěvku:<br /><input type="text" name="title"><br /><br />
    Text:<br />
    <textarea rows="20" cols="80" name="body"></textarea>
    
    <div>
    <input type="submit" name="prispevek" value="Vložit">
    </div>
</form>
