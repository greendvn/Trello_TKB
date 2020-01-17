<?php


class StatusController
{
    private $statusDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=127.0.01;dbname=TiCo_database", "root", "password");
        $this->statusDB = new StatusDB($db->connect());
    }

    public function getListStatus(){
        return $this->statusDB->getCardStatus();
    }

}