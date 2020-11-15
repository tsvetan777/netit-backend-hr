<?php

namespace routes;

class CategoryApi {
    
    public static function index() {
        
        $collection = \models\Category::categoryFetch();
        echo json_encode($collection);
    }
    
    public static function update() {
        
        $categoryId     = $_POST['category_id'];
        $categoryTitle  = $_POST['category_title'];
        
        $response = \models\Category::categoryUpdate($categoryId, $categoryTitle);
        
        if($response) {
            
            echo "Successfully updated!";
        } else {
            
            echo "Update not successful!";
        }
    }
    
    public static function delete() {
        
        $categoryId = $_POST['category_id'];
        $response   = \models\Category::categoryDelete($categoryId);
        
        if($response) {
            
            echo "Successfully deleted!";
        } else {
            
            echo "Delete not successful!";
        }
    }
    
    public static function create() {
        
        $categoryTitle  = $_POST['category_title'];
        $recordId       = \models\Category::categoryCreate($categoryTitle, 1);
        
        if($recordId) {
            
            $collection = \models\Category::categoryGet($recordId);
            echo json_encode($collection);
            
        } else {
            
            echo "Create not successful!";
        }
    }
}
