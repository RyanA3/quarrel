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

    public function find($ItemID) {
        $sql = 'SELECT * FROM Item WHERE ItemID = :ItemID';
        $statement = self::$_connection->prepare($sql);
        $statement->execute(['ItemID'=>$ItemID]);
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Item');
        return $statement->fetch();
    }

    public function update() {
        $sql = 'UPDATE Item SET name = :name WHERE ItemID = :ItemID';
         $statement = self::$_connection->prepare($sql);
         $statement->execute(['ItemID'=>$this->ItemID,'name'=>$this->name]);
         return $statement->rowCount();
    }

    public function delete() {
        $sql = 'DELETE FROM Item WHERE ItemID = :ItemID';
        $statement = self::$_connection->prepare($sql);
        $statement->execute(['ItemID'=>$this->ItemID]);
        return $statement->rowCount();
    }

}