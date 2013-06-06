<?php

class controller
{
    public $data = array('title' => ''
        
    );

    
    
    public function ukazLogin()
    {
       extract($this->data);
       require_once '../src/view/sabLogin.php';
    }
    public function ukazReg()
    {
        extract($this->data);
        require_once '../src/view/sabReg.php';
    }
    public function ukazMain()
    {
        extract($this->data);
        require_once '../src/view/sabMainPage.php';
    }
    
        public function ukazThxReg()
    {
        extract($this->data);
        require_once '../src/view/sabThxReg.php';
    }
    
         public function ukazRozhrani()
    {
        extract($this->data);
        require_once '../src/view/sabRozhrani.php';
    }
    
        public function ukaznewTopic()
    {
        extract($this->data);
        require_once '../src/view/sabNewTopic.php';
    }
    
    
           public function ukaznewPost()
    {
        extract($this->data);
        require_once '../src/view/sabNewPost.php';
    }
    
 
 
   
    
      
    
    
}



?>
