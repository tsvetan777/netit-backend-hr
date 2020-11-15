<?php include './src/controllers/SignupController.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class  ="navbar" 
             id     ="app-header">
            
            <h1 class="logo">Sign up</h1>
            
            <div id="admin-header-placeholder">
                <ul>
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/index.php">Home</a>
                    </li>
                    
                    <li class="head-nav">
                        <a class="link-nav link-head" href="http://localhost/netit-backend-hr/signin.php">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="dashboard col-3">
            <form method    ="POST" 
                  name      ="signup">
                
                <div id="user_signup">
                    <ul class="nav mb-3">
                        <li>
                            <a class    ="link-nav" 
                               id       ="user_admin"
                               href     ="#" 
                               onclick  ="showAdminForm()">Sign up as Admin</a>
                        </li>
                        
                        <li>
                            <a class    ="link-nav" 
                               id       ="user_hr"
                               href     ="#" 
                               onclick  ="showHrForm()">Sign up as HR</a>
                        </li>
                        
                        <li>
                            <a class    ="link-nav" 
                               id       ="user_employer"
                               href     ="#" 
                               onclick  ="showEmployerForm()">Sign up as Employer</a>
                        </li>
                        
                        <li>
                            <a class    ="link-nav" 
                               id       ="user_employee"
                               href     ="#" 
                               onclick  ="showEmployeeForm()">Sign up as Employee</a>
                        </li>
                    </ul>
                </div>
                
                <div id="signup-form-admin">
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="First name" 
                               name         ="first_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="Last name" 
                               name         ="last_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="User name" 
                               name         ="user_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="email" 
                               placeholder  ="E-mail" 
                               name         ="email">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password" 
                               name         ="pass">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password repeat" 
                               name         ="pass_repeat">
                    </div>
                    
                    <div class="form-group">
                        <input class    ="btn btn-primary" 
                               type     ="submit" 
                               name     ="job_submit" 
                               value    ="Sign up">
                    </div>
                    
                    <input type     ="hidden" 
                           name     ="job_tokken" 
                           value    ="0">
                </div>
                
                <div id="signup-form-hr">
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="First name" 
                               name         ="first_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="Last name" 
                               name         ="last_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="Company" 
                               name         ="company">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="User name" 
                               name         ="user_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="email" 
                               placeholder  ="E-mail" 
                               name         ="email">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password" 
                               name         ="pass">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password repeat" 
                               name         ="pass_repeat">
                    </div>
                    
                    <div class="form-group">
                        <input class    ="btn btn-primary" 
                               type     ="submit" 
                               name     ="job_submit" 
                               value    ="Sign up">
                    </div>
                    
                    <input type     ="hidden" 
                           name     ="job_tokken" 
                           value    ="1">
                </div>
                
                <div id="signup-form-employer">
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="Company" 
                               name         ="company">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="email" 
                               placeholder  ="E-mail" 
                               name         ="email">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password" 
                               name         ="pass">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password repeat" 
                               name         ="pass_repeat">
                    </div>
                    
                    <div class="form-group">
                        <input class    ="btn btn-primary" 
                               type     ="submit" 
                               name     ="job_submit" 
                               value    ="Sign up">
                    </div>
                    
                    <input type     ="hidden" 
                           name     ="job_tokken" 
                           value    ="2">
                </div>
                
                <div id="signup-form-employee">
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="First name" 
                               name         ="first_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="Last name" 
                               name         ="last_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="text" 
                               placeholder  ="User name" 
                               name         ="user_name">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="email" 
                               placeholder  ="E-mail" 
                               name         ="email">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password" 
                               name         ="pass">
                    </div>
                    
                    <div class="form-group">
                        <input class        ="form-control" 
                               type         ="password" 
                               placeholder  ="Password repeat" 
                               name         ="pass_repeat">
                    </div>
                    
                    <div class="form-group">
                        <input class    ="btn btn-primary" 
                               type     ="submit" 
                               name     ="job_submit" 
                               value    ="Sign up">
                    </div>
                    
                    <input type     ="hidden" 
                           name     ="job_tokken" 
                           value    ="3">
                </div>
            </form>
        </div>
        
        <script src="script/application/signup.js"></script>
    </body>
</html>