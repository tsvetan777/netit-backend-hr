<?php include './src/controllers/EmployeeController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Create CV</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <div class  ="navbar web-header"
             id     ="employee-header">
            <h1 class="logo">Create CV</h1>
            
            <div id="employee-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/cv.php">Home</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/jobs_list.php">Job updates</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/signin.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class  ="dashboard col-3"
             id     ="employee-editor">
            
            <form method    ="POST" 
                  name      ="new-cv">
                
                <div class="form-group">
                    <input class        ="form-control"
                           type         ="text"
                           placeholder  ="Address"
                           name         ="address"
                           required     >
                </div>
                
                <div class="form-group">
                    <input class        ="form-control"
                           type         ="tel"
                           placeholder  ="Phone"
                           name         ="phone"
                           required     >
                </div>
                
                <div class="form-group">
                    <textarea class         ="form-control h-160"
                              type          ="text"
                              placeholder   ="Education"
                              name          ="education"
                              required      ></textarea>
                </div>
                
                <div class="form-group">
                    <textarea class         ="form-control h-160"
                              type          ="text"
                              placeholder   ="Skills"
                              name          ="skills"
                              required      ></textarea>
                </div>
                
                <div class="form-group">
                    <textarea class         ="form-control h-160"
                              type          ="text"
                              placeholder   ="Experience"
                              name          ="experience"
                              required      ></textarea>
                </div>
                
                <div class="form-group">
                    <input class    ="btn btn-primary"
                           type     ="submit"
                           value    ="Update CV"
                           name     ="cv_submit">
                </div>
                
                <input type     ="hidden" 
                       name     ="job_tokken" 
                       value    ="1">
            </form>
        </div>
    
    </body>
</html>

