<?php session_start(); ?>
<?php include './src/db/Database.php'; ?>
<?php include './src/models/Auth.php'; ?>
<?php include './src/util/form.php'; ?>
<?php include './src/util/redirect.php'; ?>

<html lang="en">
    <head>
        <title>Write a title...</title>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    
    <body>
        <div id="header">
            
            <h1 class="logo">Monster HR Admin</h1>
            
            <div id="cms-manager">
                
                <?php if(Auth::isAdmin()) { ?>
                    <ul>
                        <li class="list-item"><a href="signout.php">Sign out</a></li>
                    </ul>
                <?php } ?>
                
                <?php if(Auth::isModerator() || Auth::isAdmin()) { ?>
                    <ul>
                        <li class="list-item"><a href="admin_job_post.php">Admin job post management</a></li>
                    </ul>
                <?php } ?>
                
                <?php if(Auth::isAdmin()) { ?>
                    <ul>
                        <li class="list-item"><a href="admin_category.php">Admin category</a></li>
                    </ul>
                <?php } ?>
                
            </div>   
            
        </div>
        
        <div id="content">

