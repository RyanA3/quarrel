<?php

class Item extends Model {

    var $ItemID;
    var $name;

    public function get() {
        $sql = 'SELECT * FROM Item';
        $statement = self::$_connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Item');
        return $statement->fetchAll();
    }

    public function create() {
        $sql = 'INSERT INTO Item(name) VALUE(:name)';
        $statement = self::$_connection->prepare($sql);
        $statement->execute(['name'=>$this->name]); 
        return $statement->rowCount();
    }

}