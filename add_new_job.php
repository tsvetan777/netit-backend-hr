<?php include './src/controllers/EmployerController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Add New Job</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
        <div class  ="navbar"
             id     ="employer-header">
            
            <h1 class="logo">Add new job</h1>
            
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
             id     ="job" >
            <ul class="nav">
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Job offers</a>
                </li>
                
                <li>
                    <a class="link-nav" href="#">Candidates</a>
                </li>
                
                <li>
                    <a class="link-nav" href="http://localhost/netit-backend-hr/add_new_job.php">New job offer</a>
                </li>
            </ul>
        </div>
        
        <div class  ="dashboard col-3"
             id     ="employer-editor">
            <form method    ="POST" 
                  name      ="new-job-offer">
                
                <select class   ="custom-select mb-3"
                        id      ="select_job_category">
                    
                    <option value="1">Automotive Sales/Repair Services  </option>
                    <option value="2">Security/Protection               </option>
                    <option value="3">Staffing/Employment Agencies      </option>
                    <option value="4">Information Technology            </option>
                    <option value="5">Marketing, Sales and Service      </option>
                </select>
                
                <div class="form-group">
                    <input class        ="form-control"
                           type         ="text"
                           placeholder  ="Job title"
                           name         ="job_title"
                           id           ="job_title">
                </div>
                
                <div class="form-group">
                    <textarea class         ="form-control h-40"
                              type          ="text"
                              placeholder   ="Job content"
                              name          ="job_content"
                              id            ="job_content"></textarea>
                </div>
                
                <div class="form-group">
                    <textarea class         ="form-control h-160"
                              type          ="text"
                              placeholder   ="Job preview content"
                              name          ="job_preview"
                              id            ="job_preview"></textarea>
                </div>
                
                <div class="form-group">
                    <input class    ="btn btn-primary"
                           type     ="button"
                           id       ="employer_job_submit"
                           name     ="job_submit"
                           value    ="Submit">
                </div>
                
                <input type     ="hidden"
                       name     ="job_tokken"
                       value    ="1">
            </form>
        </div>
        
        <script src="script/client/query.js"></script>
        <script src="script/external/jquery.js"></script>
        <script src="script/application/index.js"></script>
        <script src="script/application/employer/employer.js"></script>
        
    </body>
</html>