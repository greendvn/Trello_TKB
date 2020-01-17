<?php


class DayController
{
    private $dayDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=127.0.0.1;dbname=TiCo_database", "root", "password");
        $this->dayDB = new DayDB($db->connect());
    }
    public function getListDay(){
        return $this->dayDB->getDayList();
    }

}