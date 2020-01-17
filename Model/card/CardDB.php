<?php

class CardDB
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=TiCo_database;charset=utf8", "root", "Dieu1988");
        $this->conn = $db->connect();
    }

    public function getCard($id)
    {
        $sql = "SELECT * 
                FROM cards";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        return $this->returnCardList($result);
    }

    public function addCard($card)
    {
        $sql = "INSERT INTO cards(name,user_id ,status_id, day_id)
                VALUES (:name, :userId, :statusId, :dayId)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $card->getName());
        $stmt->bindParam(':userId', $card->getUserId());
        $stmt->bindParam(':statusId', $card->getStatusId());
        $stmt->bindParam(':dayId', $card->getDayId());
        $stmt->execute();
    }

    public function delete($card_id)
    {
        $sql = "DELETE FROM cards WHERE id = $card_id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
    }

    public function editCard($card_id, $card)
    {
        $sql = "UPDATE cards
                SET (name = :name, user_id = :user_id, status_id = :status_id, day_id = :day_id)
                WHERE id = :card_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $card->getName());
        $stmt->bindParam(':status_id', $card->getStatusId());
        $stmt->bindParam(':day_id', $card->getDayId());
        $stmt->bindParam(':card_id', $card_id);
        $stmt->execute();
    }

    public function getCardById($card_id)
    {
        $sql = "SELECT *
                FROM cards
                WHERE id = $card_id";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch();
        $card = new Card($result['name'],
            $result['user_id'],
            $result['status_id'],
            $result['day_id']);
        $card->setId($result['id']);
        $card->setDescription($result['description']);
        return $card;
    }

    public function crateCardFromResult($item)
    {
        $card = new Card($item['name'],
            $item['user_id'],
            $item['status_id'],
            $item['day_id']);
        $card->setId($item['id']);
        return $card;
    }

    public function returnCardList($result)
    {
        $arr = [];
        foreach ($result as $item) {
            $card = $this->crateCardFromResult($item);
            array_push($arr, $card);
        }
        return $arr;
    }
}