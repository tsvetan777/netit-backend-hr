<?php

namespace controllers;

class EmployeeController {
    
    public function index() {
        
        if(\controllers\UserController::isNotLoggedIn()) {
            return redirect('index');
        }
        
        if(\controllers\UserController::isNotEmployee()) {
            return redirectTo('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
        
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createCv();
        }
    }
    
    private function createCv() {
        
        $age        = $_POST['age'];
        $address    = $_POST['address'];
        $phone      = $_POST['phone'];
        $education  = $_POST['education'];
        $skills     = $_POST['skills'];
        $experience = $_POST['experience'];
        
        $id = \models\CV::createNewCv($age, $address, $phone, $education, $skills, $experience);
        
        if($id) {
            \controllers\SessionController::setMessage('create_cv', 'Your CV was created successfully!');
            redirectTo('employee');
        }
    }
    
    private function logout() {
        
        \controllers\UserController::logout();
        return redirect('signin');
    }
}

