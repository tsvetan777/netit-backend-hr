<?php

namespace controllers;

class AdminController {
    
    public function index() {
        
        if(\controllers\UserController::isNotLoggedIn()) {
            return redirect('index');
        }
        
        if(\controllers\UserController::isNotAdmin()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
        
        if(isset($_POST['job_tokken']) && $_POST['job_tokken'] == 1) {
            return $this->createCategory();
        }
    }
    
    private function createCategory() {
        
        $categoryTitle = $_POST['category_title'];
        $jobId = \models\Job::createNewJob($categoryTitle);
        
        if($jobId) {
            
            \controllers\SessionController::setMessage('create_category', 'New category was created successfully!');
            redirect('admin');
        }
    }
    
    private function logout() {
        
        \controllers\UserController::logout();
        return redirect('signin');
    }
}
