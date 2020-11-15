<?php

namespace models;

class Category {
    
    public static function categoryCreate($title, $priority) {
        
        $query  = "INSERT INTO monster_hr_db.tb_job__categories(title, priority) "
                . "VALUES('{$title}', {$priority})";
                
        \db\Database::dbConnect()->query($query);
        
        return \db\Database::dbConnect()->getLastInsertedId();
    }
    
    public static function categoryUpdate($id, $title) {
        
        $query = "UPDATE monster_hr_db.tb_job__categories SET title = '{$title}' WHERE id = {$id}";
        \db\Database::dbConnect()->query($query);
        
        return(\db\Database::dbConnect()->affectedRows() == 1);
    }
    
    public static function categoryDelete($id) {
        
        $query = "DELETE FROM monster_hr_db.tb_job__categories WHERE id = {$id}";
        \db\Database::dbConnect()->query($query);
        
        return(\db\Database::dbConnect()->affectedRows() == 1);
    }
    
    public static function categoryFetch($id = null) {
        
        $query = ($id)  ? "SELECT * FROM monster_hr_db.tb_job__categories WHERE id = {$id}" 
                        : "SELECT * FROM monster_hr_db.tb_job__categories";
        
        \db\Database::dbConnect()->query($query);
        return \db\Database::dbConnect()->fetchCollection();
    }
}