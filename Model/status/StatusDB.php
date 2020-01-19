<?php


class StatusDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getCardStatus()
    {
        $sql = "SELECT * FROM status";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $status = new Status($item["cardStatus"]);
            $status->setId($item["id"]);
            array_push($arr, $status);
        }
        return $arr;
    }
    public function getStatusId($status){
        $sql = "SELECT id FROM status WHERE cardStatus = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$status);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }


}