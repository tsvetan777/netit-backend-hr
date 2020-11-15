<?php

namespace controllers;

class IndexController {
    
    private $jobCollection = array();
    
    public function index() {
        
        $this->jobCollection = \models\Job::get();
        if(isset($_GET) && isset($_GET['request']) && $_GET['request'] == 'data') {
            echo "Hello World!";
        }
    }
    
    public function getJobCollection($param = null) {
        return $this->jobCollection;
    }
}