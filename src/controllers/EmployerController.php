<?php

namespace controllers;

class EmployerController {
    
    public function index() {
        
        if(\controllers\UserController::isNotLoggedIn()) {
            return redirect('index');
        }
        
        if(\controllers\UserController::isNotEmployer()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
        
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createJob();
        }
    }
    
    private function createJob() {
        
        $jobTitle           = $_POST['job_title'];
        $jobContent         = $_POST['job_content'];
        $jobPreviewContent  = $_POST['preview_content'];
        
        $jobId = \models\Job::create($jobTitle, $jobContent, $jobPreviewContent);
        
        if($jobId) {
            \controllers\SessionController::setMessage('create_job', 'New job advertisement was created successfully!');
            redirect('employer');
        }
    }
    
    private function logout() {
        
        \controllers\UserController::logout();
        return redirect('signin');
    }
}