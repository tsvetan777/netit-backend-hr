<?php 
include './src/controllers/SigninController.php';
include './src/controllers/SessionController.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Sign In</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <div class  ="navbar"
             id     ="app-header">
            
            <h1 class="logo">Sign in</h1>
            
            <div id="admin-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/index.php">Home</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/signup.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="dashboard col-3">
            <form method    ="POST" 
                  name      ="signin">
                
                <div class="form-group">
                    <input class        ="form-control" 
                           type         ="email" 
                           placeholder  ="User e-mail" 
                           name         ="email">
                </div>
                
                <div class="form-group">
                    <input class        ="form-control" 
                           type         ="password" 
                           placeholder  ="User password" 
                           name         ="pass">
                </div>
                
                <div class="form-group">
                    <input class    ="btn btn-primary" 
                           type     ="submit" 
                           name     ="job_submit" 
                           value    ="Sign in">
                </div>
                    
                <input type     ="hidden" 
                       name     ="job_tokken" 
                       value    ="1">
            </form>
        </div>
    
    </body>
</html>
