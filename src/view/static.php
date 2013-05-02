<!DOCTYPE html>
<html>
    <head lang="cs">
        <meta name="robots" content="Index, Follow" />
        <meta charset="UTF-8">
        <meta name="keywords" content="operační systémy aplikace hry novinky vychytávky tipy triky" />
        <meta name="description" content="Web zaměřený na mobilní operační systémy" />
        <meta name="author" content="Jiří Poláček, Zdeněk Potměšil" />
        <base href="/projekt" />
        <link href="manhattanc9/web/css/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" href="manhattanc9/web/js/main.js"></script>
        
        <title><?php echo $title ?>Kurva!</title>
        
   
        
    </head>
    <body>
      <div id="bar"></div>
      <div id="page">
        <header>
          <a href="#">
            <img src="manhattanc9/web/img/header.png" alt="Mobilní OS">
          </a> 
        </header>
        
        
        <nav>
            <div id="novinky" onclick="location.href='#';">
                Novinky
            </div>
            <div id="clanky" onclick="location.href='#';">
                Články
            </div>
            <div id="aplikace" onclick="location.href='#';">
                Aplikace
            </div>
            <div id="hry" onclick="location.href='#';">
                Hry
            </div>    
          
          
              <form>            
              <div id="searchbar">
                  <input type="text" size="24" placeholder="Vyhledávání" onClick="aktivni();"> <!-- onclicknefunguje -->
                </div>
               <button type="submit">
                   <img src="web/img/search/lupa.png" alt="lupa" width="18px" height="18px">
               </button>
                
                
           
              </form>
          
        </nav>
        
        
          
          
        <aside>


   
            
        </aside>
        
        
        
        
        <footer>
        <p>Hello World..</p>
            
        </footer>
        
      </div>  
    </body>
</html>
