<?php

namespace controllers;

class SignupController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['job_tokken'])) {
            
            $firstName  = $_POST['first_name'   ];
            $lastName   = $_POST['last_name'    ];
            $userName   = $_POST['user_name'    ];
            $email      = $_POST['email'        ];
            $pass       = $_POST['pass'         ];
            
            if(\controllers\UserController::registrationAdmin($firstName, $lastName, $userName, $email, $pass)) {
                echo "You signed up successfully!";
            }
        }
    }
}
