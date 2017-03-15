<?php

class Data {

    function Data() {}

    public function getConnection() {

        $mysqli = new mysqli('93.188.160.115', 'u130925522_tcu', '7z4gTnTzHWQu', 'u130925522_tcure');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        return $mysqli;
    }

}

?>