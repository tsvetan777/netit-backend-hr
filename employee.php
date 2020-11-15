<?php include './src/controllers/EmployeeController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Employee</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head> 
    <body>
    
        <div class  ="navbar"
             id     ="employee-header">
            
            <h1 class="logo">Welcome Employee!</h1>
        
            <div id="employee-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/employee.php">Home</a>
                    </li>
                
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/cv.php">My CV</a>
                    </li>
                
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/jobs_list.php">Job offer updates</a>
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
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Job offers</a>
                </li>
            
                <li>
                    <a class="link-nav" href="#">Companies</a>
                </li>
            
                <li class="item-nav dropdown">
                    
                    <a class    ="link-nav dropdown-toggle" 
                       href     ="#" 
                       id       ="navbar-dropdown" 
                       role     ="button">Business sector</a>
                    
                    <div class              ="dropdown-menu" 
                         id                 ="category-dropdown" 
                         aria-labelledby    ="navbar-dropdown"></div>
                </li>
            </ul>
        
            <form class ="form-inline my-2 my-lg-0"
                  id    ="search-form">
            
                <input class        ="form-control mr-lg-2" 
                       id           ="search-job" 
                       type         ="text" 
                       placeholder  ="Search" 
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


