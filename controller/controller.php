<?php

require 'model/model.php';

class Controller
{
    private $Model;

    public function __construct()
    {
        $this->Model = new Model();
    }

    public function form()
    {
        $Databases = $this->Model->getAllDB();
        require 'view/home.php';
    }
    public function DbPage()
    {
        require 'view/creatingDB.php';
    }

    public function tablePage()
    {
        $this->getAllDB();
    }

    public function createDb($data)
    {

        $dbName = $data['DbName'];

        //here we will check the db name
        if ($dbName) {
            $this->Model->createDb($data);
        }
        //else we redirect user to the home page
        else {
            $_SESSION["error"] = "please provide a valid database name";
            require "view/creatingDB.php";
        }
    }

    public function getAllDB()
    {
        $DbList =  $this->Model->getAllDB();
        require 'view/tableView.php';
    }

    public function createTable($datas)
    {
        $dbName = $datas['DbName'];
        $tableName = $datas['tableName'];
        $this->Model->createTable($dbName, $tableName);

        $colum = $datas['columnName'];
        $count = count($datas['columnName']);

        for ($i = 0; $i < $count; $i++) {
            $this->Model->addColumn($dbName, $tableName, $colum[$i], $datas['dataTypes'][$i]);
        }
    }

    public function createColumn($db)
    {
        // print_r($db);
        $_SESSION['tableName'] = $db['tableName'];
        $_SESSION['dbName'] = $db['dbName'];

        $dbName = $db['selectedDb'];
        $dbList = $this->Model->getAllDB();

        if (!empty($db["selectedDb"])) {
            $tableList = $this->Model->getTable($dbName);
        }
        if (!empty($db['tableName'])) {
            $column = $this->Model->getAllColumns($db['tableName'], $db['dbName']);
            // print_r($column);
            // $count = count($column);

        }
        require 'view/addColumn.php';
    }

    public function insertValues($data)
    {
        $db = $data["db"];
        $table = $data['table'];

        $column = [];
        foreach ($data as $key => $value) {
            if ($key !== 'db' && $key !== 'table') {
                $column[$key] = $value;
            }
        }
        $this->Model->insert($db, $table, $column);
    }
}
