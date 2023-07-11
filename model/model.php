<?php

require 'connection.php';
session_start();
class Model extends DB
{

    public function createDb($data)
    {

        $dbName = $data['DbName'];
        if (isset($dbName)) {
            //here we will create a new database
            $this->db->query("CREATE DATABASE $dbName");
            $_SESSION["success"] = "database created successfully";
            //after that we will redirect the user to the table creation page
            header("location:/");
        }
    }

    public function getAllDB()
    {

        $stmt = $this->db->query("SHOW DATABASES");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTable($db)
    {
        $stmt = $this->db->query(" SELECT TABLE_NAME AS tablesNameList FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$db'");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function createTable($dbName, $tableName)
    {
        $this->db->query(
            "USE $dbName;
            CREATE TABLE $tableName (id int not null AUTO_INCREMENT,primary key(id))"
        );
    }

    public function addColumn($dbName, $tableName, $columnName, $dataType)
    {
        $this->db->query("
        USE $dbName;
        ALTER TABLE $tableName ADD COLUMN $columnName $dataType;
        ");
        header("location:/");
    }

    public function getAllColumns($table, $db)
    {
        $stmt = $this->db->query("SELECT column_name FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$db' AND `TABLE_NAME`='$table'");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($db, $table, $column)
    {
    //     foreach ($column as $key => $value) {
    //         # code...
    //         $this->db->query("
    //     USE $db;
    //    ");
        // }
        print_r($column);
    }
}
