<?php


class CardDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getCard()
    {
        $sql = "SELECT cards.id, cards.name, cards.description, card.userId, card.statusId, card.dayId
                FROM cards
                INNER days, status, users
                ON cards.dayId = days.id, cards.statusId = status.id, cards.userId = users.id";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        return $this->returnCardList($result);
    }

    public function creatCard($card)
    {
        $sql = "INSERT INTO cards(name, desciption, userId, statusId, dayId)
                VALUE (:name, :desciption, :userId, statusId, dayId)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $card->getName());
        $stmt->bindParam(':description', $card->getDesciption());
        $stmt->bindParam(':userId', $card->getUserId());
        $stmt->bindParam(':statusId', $card->getStatusId());
        $stmt->bindParam(':dayId', $card->getDayId());
        $stmt->execute();
    }

    public function deleteCard($card_id)
    {
        $sql = "DELETE FROM cards WHERE id = $card_id";
        $stmt = $this->connect->query($sql);
        $stmt->execute();
    }

    public function editCard($card_id, $card)
    {
        $sql = "UPDATE cards
                SET name = :name, description = :desciption, user_id = :user_id, status_id = :status_id, day_id = :day_id
                WHERE id = $card_id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $card->getName());
        $stmt->bindParam(':description', $card->getDesciption());
        $stmt->bindParam(':user_id', $card->getUserId());
        $stmt->bindParam(':status_id', $card->getStatusId());
        $stmt->bindParam(':day_id', $card->getDayId());
        $stmt->execute();
    }

    public function getCardById($card_id)
    {
        $sql = "SELECT cards.id, cards.name, cards.description, card.userId, card.statusId, card.dayId
                FROM cards
                INNER days, status, users
                ON cards.dayId = days.id, cards.statusId = status.id, cards.userId = users.id";
        $stmt = $this->connect->query($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $card = new Card($result['name'],
            $result['user_id'],
            $result['status_id'],
            $result['day_id']);
        $card->setId($result['id']);
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