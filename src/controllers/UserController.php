<?php

namespace controllers;

class UserController {
    
    public static function username() {
        return $_SESSION['user_ref']['user_name'];
    }
    
    public static function email() {
        return $_SESSION['user_ref']['email'];
    }
    
    public static function role() {
        return $_SESSION['user_ref']['role'];
    }
    
    public static function isLoggedIn() {
        return isset($_SESSION['user_ref']);
    }
    
    public static function isNotLoggedIn() {
        return !self::isLoggedIn();
    }
    
    public static function isAdmin() {
        return (self::role() == 0);
    }
    
    public static function isNotAdmin() {
        return (self::role() > 0);
    }
    
    public static function isHr() {
        return (self::role() == 1);
    }
    
    public static function isNotHr() {
        return (self::role() != 1);
    }
    
    public static function isEmployer() {
        return (self::role() == 2);
    }
    
    public static function isNotEmployer() {
        return (self::role() != 2);
    }
    
    public static function isEmployee() {
        return (self::role() == 3);
    }
    
    public static function isNotEmployee() {
        return (self::role() != 3);
    }
    
    public static function set($userObject) {
        $_SESSION['user_ref'] = $userObject;
    }
    
    public static function login($email, $pass) {
        
        if(User::userExists($email, $pass)) {
                        
            $query = \db\Database::dbConnect()->query("SELECT * FROM monster_hr_db.tb_users"
                                                . "WHERE email = '{$email}' AND pass = '{$pass}'");
            
            return \db\Database::dbConnect()->fetch();
        }
        return false;
    }
    
    public static function userExists($email, $pass) {
                
        \db\Database::dbConnect()->query("SELECT COUNT(*) AS rows_count FROM monster_hr_db.tb_users"
                                   . "WHERE email = '{$email}' AND pass = '{$pass}'");
                                   
        $collection = \db\Database::dbConnect()->fetch();
        
        return($collection['rows_count'] == 1);
    }
    
    public static function registrationAdmin($firstName, $lastName, $userName, $email, $pass) {
        
        $query = "INSERT INTO monster_hr_db.tb_users(user_name, email, pass, role) "
               . "VALUES('{$userName}', '{$email}', '{$pass}', '0'";
           
        \db\Database::dbConnect()->query($query);
        $lastInsertedId = \db\Database::dbConnect()->getLastInsertedId();
    
        $query = "INSERT INTO monster_hr_db.tb_users__data(first_name, last_name) "
               . "VALUES('{$firstName}', '{$lastName}')";
           
        \db\Database::dbConnect()->query($query);
   
        if(\db\Database::dbConnect()->getLastInsertedId()) {
            return true;
        }
        return false;
    }
    
    public static function registrationHr($firstName, $lastName, $company, $userName, $email, $pass) {
                
        $query = "INSERT INTO monster_hr_db.tb_users(company, user_name, email, pass, role) "
               . "VALUES('{$company}', '{$userName}', '{$email}', '{$pass}', '1')";
               
        \db\Database::dbConnect()->query($query);
        $lastInsertedId = \db\Database::dbConnect()->getLastInsertedId();
       
        $query = "INSERT INTO monster_hr_db.tb_users__data(first_name, last_name) "
               . "VALUES('{$firstName}', '{$lastName}')";
              
        \db\Database::dbConnect()->query($query);
       
        if(\db\Database::dbConnect()->getLastInsertedId()) {
            return true;
        }
        return false;
    }
    
    public static function registrationEmployer($company, $email, $pass) {
                
        $query = "INSERT INTO monster_hr_db.tb_users(company, email, pass, role) "
               . "VALUES('{$company}', '{$email}', '{$pass}', '2')";
               
        \db\Database::dbConnect()->query($query);
        $lastInsertedId = \db\Database::dbConnect()->getLastInsertedId();
                     
        if(\db\Database::dbConnect()->getLastInsertedId()) {
            return true;
        }
        return false;
    }
    
    public static function registrationEmployee($firstName, $lastName, $userName, $email, $pass) {
                
        $query = "INSERT INTO monster_hr_db.tb_users(user_name, email, pass, role) "
               . "VALUES('{$userName}', '{$email}', '{$pass}', '3')";
               
        \db\Database::dbConnect()->query($query);
        $lastInsertedId = \db\Database::dbConnect()->getLastInsertedId();
       
        $query = "INSERT INTO monster_hr_db.tb_users__data(first_name, last_name) "
               . "VALUES('{$firstName}', '{$lastName}')";
              
        \db\Database::dbConnect()->query($query);
       
        if(\db\Database::dbConnect()->getLastInsertedId()) {
            return true;
        }
        return false;
    }
    
    public static function logout() {
        session_destroy();
    }
}