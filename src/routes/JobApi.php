<?php

namespace routes;

class JobApi {
    
    public static function index($id = null) {
        
        $collection = \models\Job::get($id);
        echo json_encode($collection);
    }
    
    public static function category($id) {
        
        $collection = \models\Job::getJobByCategory($id);
        echo json_encode($collection);
    }
    
    public static function search() {
        
        $collection = \models\Job::search(array(
            'q'         => $_GET['q'],
            'searchBy'  => $_GET['searchBy']
        ));
        
        echo json_encode($collection);
    }
    
    public static function create() {
        
        $queryCollection = array(
            'title'             => $_POST['title'           ],
            'content'           => $_POST['content'         ],
            'preview_content'   => $_POST['preview_content' ],
            'category'          => $_POST['category'        ]
        );
        
        $jobId = \models\Job::createNewJob($queryCollection);
        
        if($jobId) {
            
            $collection = \models\Job::get($jobId);
            echo json_encode($collection);
            
        } else {
            
            echo "Create not successful!";
        }
    }
    
    public static function delete() {
        
        $id         = $_POST['job_id'];
        $deleted    = \models\Job::delete($id);
        
        if($deleted) {
            
            echo "Successfully deleted!";
        } else {
            
            echo "Delete not successful!";
        }
    }
}