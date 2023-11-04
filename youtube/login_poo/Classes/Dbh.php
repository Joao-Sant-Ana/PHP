<?php

    class Dbh
    {
        private $dbhost = "localhost";
        private $dbname = "teste";
        private $dbusername = "root";
        private $dbpassword = "";

        protected function connect() {
            try {
                $pdo = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $pdo;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        }
    }