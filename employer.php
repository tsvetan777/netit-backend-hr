<?php include './src/controllers/EmployerController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Employer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
        <div class  ="navbar"
             id     ="employer-header">
            
            <h1 class="logo">Welcome Employer!</h1>
        
            <div id="employer-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/employer.php">Home</a>
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
                    <a class="link-nav" href="http://localhost/netit-backend-hr/employee.php">Employees</a>
                </li>
            
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/add_new_job.php">Add new</a>
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

