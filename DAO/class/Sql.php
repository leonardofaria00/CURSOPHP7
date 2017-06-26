<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");
    }//construct

    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }//foreatch
    }//setparams

    private function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }//setParam

    public function query($rowQuery, $params = array()) {
        $stmt = $this->conn->prepare($rowQuery);

        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }//query

    public function select($rowQuery, $params = array()): array {

        $stmt = $this->query($rowQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }//select
}//class
?>