<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster HR - Jobs List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
        <div class  ="navbar"
             id     ="admin-header">
            
            <h1 class="logo">List of jobs</h1>
            
            <div class  ="head-nav"
                 id     ="admin-header-placeholder" >
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
                    <a class="link-nav" href="http://localhost/netit-backend-hr/jobs_list.php">Job offers</a>
                </li>
            
                <li class="item-nav dropdown">
                
                    <a class="link-nav dropdown-toggle" href="http://localhost/netit-backend-hr/categories.php" id="navbar-dropdown" role="button">Categories</a>
                
                    <div class  ="dropdown-menu" 
                         id     ="category-dropdown"></div>
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
        
            <div class  ="container"
                 id     ="content">
            
            </div>
        </div>
    
        <script src="script/client/query.js"></script>
        <script src="script/external/jquery.js"></script>
        <script src="script/application/admin/list_jobs.js"></script>
        <script src="script/application/index.js"></script>
    </body>
</html>