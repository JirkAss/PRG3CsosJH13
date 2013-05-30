<?php

class novetema
{
    private $repository;
    private $pdo;
    
    public function __construct()
    {        
        $this->pdo    =   new \PDO(
                                'mysql:host=localhost;dbname=forum', 
                                'kor3k', 
                                'y11tbJSjl', 
                                array(
                                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                                    )
                               );         
        
        $this->repository   =   new UserRepository( $this->pdo );
    }
}
?>
