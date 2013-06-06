<?php
require_once 'sabMainPage.php';
?>
<h1>Nový příspěvek</h1>

<form action="../src/controller/novyprispevek.php" method="POST">
    Název přízpěvku:<br /><input type="text" name="title"><br /><br />
    Text:<br />
    <textarea rows="20" cols="80" name="body"></textarea>
    
    <div>
    <input type="submit" name="prispevek" value="Vložit">
    </div>
</form>
