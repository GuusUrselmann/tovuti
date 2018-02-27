<?php

class wfdb {

    private $db_host = 'localhost';
    private $db_username = 'root';
    private $db_pass = '';
    private $db_name = 'workflow';

    private $pdo;

    function __construct() {
        $this->pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_username, $this->db_pass);
    }


    public function get_var($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);

            $data = $result->fetch();
            return $data;
        }
    }

    public function get_row($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);

            $data = $result->fetch();
            return $data;
        }
    }

    public function get_results($sql) {
        if(isset($sql)) {
            $result = $this->pdo->query($sql);

            $data = array();
            while($array = $result->fetch()) {
                array_push($data, $array);
            }

            return $data;
        }
    }

}
