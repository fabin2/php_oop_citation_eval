<?php
    class Citation {
        public $connect;

        const DBTABLE = "citation";

        public $auteur;
        public $citation;

        public function __construct($dbConnection){
            $this->connect = $dbConnection;
        }

        public function createCitation(){
            $sqlQuery = "INSERT INTO" . Citation::DBTABLE . "
            auteur_name = :auteur,
            auteur_citation = :citation,
            auteur_date = now();";
            
            $stmt = $this->connect->prepare($sqlQuery);
            $stmt->bindParam(":auteur", $this->auteur);
            $stmt->bindParam(":citation", $this->citation);

            if($stmt->execute()){
                return true;
            }
            return false;

        }

        public function readTable(){
            $sqlQuery = "SELECT * FROM" . citation::DBTABLE ;
        }
    }


?>