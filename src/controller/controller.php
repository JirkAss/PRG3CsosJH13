<?php
/* Zatím jen zkouším, jak se co chová - Jirka */






class controller {
    public $data = array('title' => ''
        
    );
    
    
    
    public $pohledy = "jupi! ahoj z Controlleru";
    
    
    
    public function ukazStranku()
    {
        $this->data['title'] = 'Funguje to ';
        extract($this->data);
        require_once '../src/view/static.php';
        
        
        
    }

    /*public function ukazStranku()
{
        if ($this->pohled)
        {
                extract($this->data);
                require("view/" . $this->pohled . ".php");
                
        }
}*/

    

    

}


?>