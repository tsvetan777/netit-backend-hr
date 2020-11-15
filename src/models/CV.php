<?php

namespace models;

class CV {
    
    public static function createNewCv($age, $address, $phone, $education, $skills, $experience) {
    
        $query = "INSERT INTO monster_hr_db.tb_users__data(age, address, phone, education, skills, experience) "
               . "VALUES('{$age}', {$address}, '{$phone}', {$education}, {$skills}, {$experience})";
                
       \db\Database::dbConnect()->query($query);
       return \db\Database::dbConnect()->getLastInsertedId();
    }
    
    public static function fetch($userId = null) {
        
        $query = "SELECT * FROM monster_hr_db.tb_users__data";
        
        if($id) {
            $query = "$query WHERE user_id = {$userId}";
        }
        
        \db\Database::dbConnect()->query($query);
        return \db\Database::dbConnect()->fetchCollection();
    }
}
