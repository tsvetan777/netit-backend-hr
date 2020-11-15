<?php include './src/controllers/AdminController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <div class  ="navbar"
             id     ="admin-header">
            
            <h1 class="logo">Welcome Admin!</h1>
            
            <div id="admin-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/admin.php">Home</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/categories.php">New category</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/signin.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class  ="dashboard col-3"
             id     ="job">
            
            <ul class="nav mb-3">
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Jobs</a>
                </li>
                <li class="item-nav dropdown">
                    
                    <a class    ="link-nav dropdown-toggle" 
                       href     ="#" 
                       id       ="navbar-dropdown" 
                       role     ="button">Categories</a>
                    
                    <div class              ="dropdown-menu" 
                         id                 ="category-dropdown" 
                         aria-labelledby    ="navbarDropdown"></div>
                </li>
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/hr_list.php">HR</a>
                </li>
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employer.php">Employers</a>
                </li>
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employee.php">Employees</a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                
                <input class        ="form-control mr-lg-2" 
                       id           ="search-job" 
                       type         ="text" 
                       placeholder  ="Search..." 
                       aria-label   ="Search">
                
                <select class   ="custom-select mr-lg-2" 
                        id      ="search-job-combobox">
                    
                    <option value="title"           >Search by title</option>
                    <option value="preview_content" >Search by preview</option>
                </select>
                
                <div class="d-flex">
                    <input class    ="btn btn-outline-success my-2 my-sm-0 mr-2" 
                           id       ="search-job-action" 
                           type     ="button" 
                           value    ="Search">
                    
                    <input class    ="btn btn-outline-success my-2 my-sm-0" 
                           id       ="search-job-clear" 
                           type     ="button" 
                           value    ="Clear">
                </div>
            </form>
            
            <div class  ="container"
                 id     ="content">
                
            </div>
            
        </div>
    
        <script src="script/client/query.js"></script>
        <script src="script/external/jquery.js"></script>
        <script src="script/application/index.js"></script>
    </body>
</html>







<!--<div class="wrapper">
    <form method="POST">
        
        <input type="text"
               name="job_title"
               placeholder="Job title">
        
        
        <textarea name="job_content"
                  placeholder="Job description"></textarea>
        
        <textarea name="job_preview_content"
                  placeholder="Job description preview"></textarea>
        
        <input type="hidden"
               name="create_new_job_tokken"
               value="1">
        
        <input type="submit"
               value="Create new job">
        
    </form>
</div>-->

