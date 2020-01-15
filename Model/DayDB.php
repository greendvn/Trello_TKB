<?php


class DayDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect
    }

    public function getDayList(){
        $sql = "SELECT * FROM days";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $day = new Day($item["day"];
            $day->setId($item["id"]);
            array_push($arr, $day);
        }
        return $arr;
    }

}