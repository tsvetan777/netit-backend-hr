<?php include './src/controllers/RoleController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Categories</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <div class  ="navbar"
             id     ="admin-header">
            
            <h1 class="logo">Categories</h1>

            <div id="admin-header-placeholder">
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
             id     ="admin-editor">
            
            <ul class="nav mb-3">
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Job offers</a>
                </li>
                
                <li>
                    <a class="link-nav" href="#">Categories</a>
                </li>
                
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/hr.php">HR</a>
                </li>
                
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employer.php">Employers</a>
                </li>
                
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employee.php">Employees</a>
                </li>
            </ul>
            
            <form id        ="category-editor" 
                  method    ="POST" 
                  name      ="category-editor">
                
                <div class="form-group">
                    <input id           ="category-title"
                           class        ="form-control"
                           type         ="text"
                           placeholder  ="Category title"
                           name         ="category_title">
                </div>
                
                <div class="form-group d-inline-block">
                    <input id       ="category-editor-submit"
                           class    ="btn btn-primary"
                           type     ="submit"
                           value    ="Add new"
                           name     ="category_submit">
                </div>
                
                <div class="form-group d-inline-block align-self-center">
                    <input id       ="category-editor-cancel"
                           class    ="btn btn-dark"
                           type     ="button"
                           value    ="Cancel"
                           name     ="category_cancel">
                </div>
                
                <input type     ="hidden"
                       name     ="job_tokken"
                       value    ="1">
            </form>
            
        </div>
        
        <div class  ="dashboard col-3"
             id     ="category-container">
            
        </div>
        
        <script src="script/client/query.js"></script>
        <script src="script/external/jquery.js"></script>
        <script src="script/application/categories.js"></script>
    </body>
</html>


