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
}
?>
