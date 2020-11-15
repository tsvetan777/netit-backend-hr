<?php include './src/util/auto_load.php';

if(isset($_GET) && isset($_GET['endpoint'])) {
    
    $requestMethod  = isset($_GET['method']) ? $_GET['method'] : 'índex';
    
    $requestId      = isset($_GET['id']) ? $_GET['id'] : null;
    
    $endpointMap    = array(
        'jobs'          => (new \routes\JobApi()),
        'categories'    => (new \routes\CategoryApi())
    );
    
    if(is_null($requestId)) {
        
        $endpointMap[$_GET['endpoint']]->{$requestMethod}();
    } else {
        
        $endpointMap[$_GET['endpoint']]->{$requestMethod}($requestId);
    }
}