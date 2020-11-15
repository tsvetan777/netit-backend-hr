<?php

namespace models;

class Job {
    
    public static function createNewJob($collection) {
        
        $jobTitle           = $collection['title'           ];
        $jobContent         = $collection['content'         ];
        $jobPreviewContent  = $collection['preview_content' ];
        $categoryId         = $collection['category'        ];
        
        $query = "INSERT INTO monster_hr_db.tb_job(title, content, preview_content) "
               . "VALUES('{$jobTitle}', '{$jobContent}', '{$jobPreviewContent}')";
               
        \db\Database::dbConnect()->query($query);
        $lastInsertedId = \db\Database::dbConnect()->getLastInsertedId();
       
        $query = "INSERT INTO monster_hr_db.tb_job_post__categories(job_id, category_id) "
               . "VALUES('{$lastInsertedId}', '{$categoryId}')";
              
        \db\Database::dbConnect()->query($query);
        
        return $lastInsertedId;
    }
    
    public static function delete($id) {
        
        $query = "DELETE FROM monster_hr_db.tb_job WHERE id = {$id}";
        \db\Database::dbConnect()->query($query);
        
        return (\db\Database::dbConnect()->affectedRows() == 1);
    }
    
    public static function get($id = null) {
        
        if(is_null($id)) {
            
            $query = "SELECT * FROM monster_hr_db.tb_job";
        } else {
            
            $query = "SELECT * FROM monster_hr_db.tb_job WHERE id = {$id}";
        }
        
        \db\Database::dbConnect()->query($query);
        return \db\Database::dbConnect()->fetchCollection();
    }
    
    public static function search($collection) {
        
        $isSearchable = $collection['q'] && $collection['searchBy'];
        
        if($isSearchable) {
            
            $keyword    = $collection['q'];
            $column     = $collection['searchBy'];
            $query      = "SELECT * FROM monster_hr_db.tb_job WHERE $column LIKE '%$keyword%'";
            
            \db\Database::dbConnect()->query($query);
            return \db\Database::dbConnect()->fetchCollection();
        }
    }
    
    public static function getJobByCategory($categoryId) {
        
        $query  = "SELECT a* FROM monster_hr_db.tb_job a, monster_hr_db.tb_job__categories b, "
                . " monster_hr_db.tb_job_post__categories c WHERE a.id = c.job_id "
                . " AND b.id = c.category_id AND b.id = $categoryId";
        
        \db\Database::dbConnect()->query($query);
        return \db\Database::dbConnect()->fetchCollection();
    }
}