<?php 
include './src/controllers/UserController.php';

\controllers\UserController::logout();
redirect('signin');