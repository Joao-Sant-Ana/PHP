<?php

    class signup extends Dbh 
    {
        private $username;
        private $pwd;

        public function __construct($username, $pwd)
        {
            $this->username = $username;
            $this->pwd = $pwd;
        }

        private function insertUser() 
        {
            $query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd);";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":pwd", $this->pwd);
            $stmt->execute();
        }

        private function is_empty() {
            if(isset($this->username) &&  isset($this->pwd)) {
                return false;
            } else {
                return true;
            }
        }
        
        public function signupUser() 
        {
            //Error handlers
            if ($this->is_empty()) {
                header("Location: ". $_SERVER["DOCUMENT_ROOT"] ."/index.php");
                die();
            }

            //If no errors, sign up user
            $this->insertUser();


        }

    }