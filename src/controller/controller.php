<?php

class controller
{
    public $data = array('title' => ''
        
    );
    
    
    public function ukazLogin()
    {
       extract($this->data);
       require_once '../view/sabLogin.php';
    }
}
?>
