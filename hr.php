<?php include './src/controllers/HrController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - HR</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
        <div class  ="navbar"
             id     ="hr-header">
            
            <h1 class="logo">Welcome HR!</h1>
        
            <div id="hr-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/index.php">Home</a>
                    </li>
                
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/signin.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    
        <div class  ="dashboard col-3"
             id     ="job">
            
            <ul class="nav">
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Positions</a>
                </li>
            
                <li class="">
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employee.php">Employees</a>
                </li>
            </ul>
        
            <div class  ="container"
                 id     ="content">
            
            </div>
        </div>
    
        <script src="script/client/query.js"></script>
        <script src="script/external/jquery.js"></script>
        <script src="script/application/index.js"></script>
    </body>
</html>

