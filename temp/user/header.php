<?php session_start(); ?>
<?php include './src/db/Database.php'; ?>
<?php include './src/models/Auth.php'; ?>
<?php include './src/util/form.php'; ?>
<?php include './src/util/Pagination.php'; ?>
<?php include './src/util/redirect.php'; ?>

<html lang="en">
    <head>
        <title>Write a title...</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
        
        <div>
            
            <h1 class="logo">Monster HR User</h1>
            
            <div id="cms-manager">
                
                <?php if(Auth::isNotAuthenticated()) { ?>
                    <ul>
                        <li class="list-item"><a href="signin.php">Sign in</a></li>
                        <li class="list-item"><a href="signup.php">Sign up</a></li>
                    </ul>
                <?php } ?>
                
                <?php if(Auth::isAuthenticated()) { ?>
                    <ul>
                        <li class="list-item"><a href="signout.php">Sign out</a></li>
                    </ul>
                <?php } ?>
                
            </div>
        </div>
        
        <div id="content">
            
        </div>