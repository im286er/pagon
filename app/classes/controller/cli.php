<?php

namespace Controller;

class Cli extends \OMni\Controller
{
    protected $params;
    
    public function __construct()
    {
        //todo something
    }
    
    public function before()
    {
        
    }
    
    public function after()
    {
        echo $this->body;
    }
}