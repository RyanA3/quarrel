<?php

class Model {

    protected static $_connection = null;

    public function __construct() {
        if(self::$_connection == null) {
            $host = getenv("MYSQL_HOST");
            $dbname = getenv("MYSQL_DATABASE");
            $user = getenv("MYSQL_USER");
            $password = getenv("MYSQL_PASSWORD");

            self::$_connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); 
        }

    }

}

?>