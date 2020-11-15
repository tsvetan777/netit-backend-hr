<?php

namespace controllers;

class RoleController {
    
    public function roleController() {
        
        if(\controllers\UserController::isNotLoggedIn()) {
            return redirect('index');
        }
        
        if(\controllers\UserController::isNotAdmin()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            return $this->logout();
        }
    }
    
    private function logout() {
        
        \controllers\UserController::logout();
        return redirect('index');
    }
}