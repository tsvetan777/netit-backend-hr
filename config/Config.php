<?php

namespace config;

class Config {
    
    public static function db($handler = null) {
        
        if($handler == 'test') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_pass' => '',
                'db_name' => 'monster_hr_db_test'
            );
        }
        
        if($handler == 'prod') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_pass' => '',
                'db_name' => 'monster_hr_db_prod'
            );
        }
        
        return array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_pass' => '',
            'db_name' => 'monster_hr_db'
        );
    }
}

