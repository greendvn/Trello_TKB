<?php


class StatusController
{
    private $statusDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database", "root", "Dieu1988");
        $this->statusDB = new StatusDB($db->connect());
    }

    public function getListStatus(){
        return $this->statusDB->getCardStatus();
    }

    public function getStatusId($status){
        return $this->statusDB->getStatusId($status);
    }

}