<?php


class StatusController
{
    private $statusDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database", "root", "long1996");
        $this->statusDB = new StatusDB($db->connect());
    }

    public function getListStatus(){
        return $this->statusDB->getCardStatus();
    }

}