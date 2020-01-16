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

//    public function creatCardStatus($status)
//    {
//        $sql = "INSERT INTO status (cardStatus)
//                VALUE (:cardStatus)";
//        $stmt = $this->connect->prepare($sql);
//        $stmt->bindParam(':cardStatus', $status->getCardStatus());
//        $stmt->execute();
//    }
//
//    public function deleteCardStatus($status_id)
//    {
//        $sql = "DELETE FROM status
//                WHERE id = $status_id";
//        $stmt = $this->connect->query($sql);
//        $stmt->execute();
//    }
}