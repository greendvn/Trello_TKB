<?php


class DayController
{
    private $dayDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database", "root", "Dieu1988");
        $this->dayDB = new DayDB($db->connect());
    }
    public function getListDay(){
        return $this->dayDB->getDayList();
    }

}