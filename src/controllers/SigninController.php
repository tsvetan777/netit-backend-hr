<?php

namespace controllers;

class SigninController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['job_tokken'])) {
            
            $email  = $_POST['email'];
            $pass   = $_POST['pass'];
            
            if(UserController::userExists($email, $pass)) {
                
                $userObject = UserController::login($email, $pass);
                UserController::set($userObject);
                
                if(UserController::role() > 3) {
                    redirect('index');
                }
                
                if(UserController::role() == 0) {
                    redirect('admin');
                }
                
                if(UserController::role() == 1) {
                    redirect('hr');
                }
                
                if(UserController::role() == 2) {
                    redirect('employer');
                }
                
                if(UserController::role() == 3) {
                    redirect('employee');
                }
            }
            
            return SessionController::setMessage('error_message', 'User not found');
        }
    }
}

