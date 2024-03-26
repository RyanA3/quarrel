<?php

class Model {

    protected static $_connection = null;

    public function __construct() {
        if(self::$_connection == null) {
            $host = 'db';
            $dbname = 'quarrel_db';
            $user = 'quarrel_admin';
            $password = 'password';

            self::$_connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); 
        }

    }

}

?>