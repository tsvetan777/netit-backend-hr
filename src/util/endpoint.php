<?php

class Endpoint {
    
    public function index() {
        
        if($_GET['request'] && $_GET['request'] == 'data') {
            echo "Hello World!";
        }
    }
}

(new Endpoint())->index();