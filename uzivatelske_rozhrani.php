<html>
    
    <head>
    <title>Uživatelské rozhraní</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/uzivatelske_rozhrani.css">
    </head>
    <body>
        
       
        <H1> Změna údajů o uživateli</H1>
        
    <form action="Hindex.php" method="POST">

        
    <div><label for="nickname">Heslo:</label></div>   
    <div><input type="password" name="password"></div>

    

    <div><label for="e-mail">E-mail:</label></div>
    <div><input type="text" name="e-mail"></div>
    
    
    <div><label for="date">Datum narození:</label></div>
    <div><input type="text" name="text"></div>
    
        <div><label for="place">Bydliště:</label></div>
    <div><input type="text" name="text"></div>
    
    
    
        <div><label for="place">Nahrajte svého avatara:</label></div>
    <div><input type="file" name="soubor"></div>
  
    

 <H2>   
        <div><label for="date">Souhlasím se změnou údajů:</label> 
        <input type="checkbox" checked name="skrtatko" value="ano"></div>
 </H2>
    
    <div><input type="submit" name="go" value="Uložit změny"></div>
    <div><input type="reset" name="reset" value="Resetovat změny"></div>


</form>
    
    
    

</body>
</html>
