<?php

namespace controllers;

class HrController {
    
    public function index() {
        
        if(\controllers\UserController::isNotLoggedIn()) {
            return redirect('index');
        }
        
        if(\controllers\UserController::isNotHr()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            \controllers\UserController::logout();
            return redirect('index');
        }
    }
    
    private function logout() {
        
//        \controllers\UserController::logout();
        return redirectTo('signin');
    }
}