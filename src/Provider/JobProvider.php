<?php

namespace Giorgionetg\Phask\Provider;

use Giorgionetg\Phask\Entity\Job;

class JobProvider
{
    
    protected $conn;
    protected $class;
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function getOne()
    {
        return new Job();
    }
    
    public function getList()
    {
        
    }
    
    public function save($job)
    {
        
    }
    
    public function delete($job)
    {
        
    }
    
}