<?php

class Item extends Model {

    var $ItemID;
    var $name;

    public function get() {
        $sql = 'SELECT * FROM Items';
        $statement = self::$_connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Item');
        return $statement->fetchAll();
    }

}

?>