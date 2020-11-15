<?php

namespace db {
    
    class Database {

        private $dbConnection;
        private $lastQuery          = null;
        private $executeError       = null;
        private $resultCollection   = null;
        private static $instance    = null;

        public static function dbConnect() {

            if (!Database::$instance) {
                Database::$instance = new Database();
            }
            return Database::$instance;
        }

        private function __construct() {

            $handler    = NULL;
            $host       = \config\Config::db($handler)['db_host'];
            $user       = \config\Config::db($handler)['db_user'];
            $pass       = \config\Config::db($handler)['db_pass'];
            $name       = \config\Config::db($handler)['db_name'];

            $this->dbConnection = new \mysqli($host, $user, $pass, $name);
        }

        public function query($query) {

            $this->lastQuery        = $query;
            $this->resultCollection = $this->dbConnection->query($query);

            if ($this->dbConnection->error) {
                echo '<br>';
                echo '<strong>SQL Error: database not found</strong>';
                echo '<hr>';
                var_dump($this->dbConnection->error);
                echo '<hr>';
                echo '<br>';
            }
            return $this->resultCollection;
        }

        public function fetch() {
            return $this->resultCollection->fetch_assoc();
        }

        public function fetchCollection() {

            $collection = array();
            while($element = $this->resultCollection->fetch_assoc()) {
                array_push($collection, $element);
            }
            return $collection;
        }

        public function lastQuery() {
            return $this->lastQuery;
        }

        public function error() {

            if (empty($this->executeError)) {
                $this->executeError = $this->dbConnection->error;
            }

            return $this->executeError;
        }

        public function getLastInsertedId() {
            return $this->dbConnection->inserted_id;
        }

        public function affectedRows() {
            return $this->dbConnection->affected_rows;
        }
    }
}
