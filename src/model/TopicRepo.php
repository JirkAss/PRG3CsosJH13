<?php

namespace Model;

class TopicRepo
{
    private $db;
    
    public function __construct() 
    {
        $this->db = $pdo;
        
    }
    public function save(Topic $topic)
    {
        
    }
    public function load ($id)
    {
        return new Topic();
    }
    
    protected function update(Topic $topic)
    {
        $this->db->prepare('
            INSERT INTO topic (name , description)
            VALUES (:name , :desc)' )
        ->execute([
           ':name' => $topic->getName() , 
            ':desc' => $topic->getDescription(),
        ]);
    }
}
/**//**//**//**/
/*
namespace Model
class Topic {
    private 
}



*/