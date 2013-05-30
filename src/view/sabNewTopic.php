<?php
require_once 'sabMainPage.php';
?>
<h1>Nové téma</h1>

<form action="../src/controller/novetema.php" method="POST">
    Název tématu<br /><input type="text" name="nazevtematu"><br /><br />
    Příspěvek<br />
    <textarea action="novetema.php" rows="20" cols="80" name="prispevek"></textarea>
    
    
</form>
