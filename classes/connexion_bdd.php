<?php
    class DatabaseHandler {
        const DBURL = 'localhost';
        const DBNAME = 'evalphp-citation';
        private $username = 'fabin';
        private $password = '';
        public $connection;
        public function connectionToDatabase(){
            $this-> connection = null;
            try{
                $this->connection = new PDO("mysql:host=".DatabaseHandler::DBURL."; dbname=".DatabaseHandler::DBNAME, $this->username, $this->password);
                $this->connection -> exec("set names utf8");
                echo("Connexion succès");
            }catch(PDOException $exception){
                echo("Pas de connexion");
            }
            return $this->connection;
        }
    }
?>