<?php


class CardController
{
    private $cardDB;

    public function __construct()
    {
        $this->cardDB = new CardDB();
    }

    public function index()
    {
        $cards = $this->cardDB->getCard($_SESSION['id']);
        include_once "../View/listCard.php";
    }

    public function filterCardByStatusAndDay($statusId,$dayId,$cards){
        $arr = [];
        foreach ($cards as $card) {
            if ($card->getDayId() == $dayId && $card->getStatusId() == $statusId)
                array_push($arr,$card);
            }
        return $arr;
    }
    public function createCard($card)
    {

            $this->cardDB->addCard($card);


    }

    public function deleteCard()
    {
        $card_id = $_GET['cardId'];
        $dayId = $_GET['dayId'];
        $this->cardDB->delete($card_id);
        header("location: homepage.php?page=listCard&dayId=$dayId");
    }

    public function edit()
    {
        $card = $this->cardDB->getCardById($_GET['cardId']);
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $card_id = $_GET['cardId'];
            $card->setName($_POST["name"]);
            $card->setDescription($_POST["description"]);
            $dayid = $card->getDayId();
            $this->cardDB->editCard($card_id, $card);

            header("Location: homepage.php?page=listCard&dayId=$dayid");
        }
    }

    public function editStatus($cardId,$newStatusId){
        $card = $this->cardDB->getCardById($cardId);

        $card->setStatusId($newStatusId);
        $dayId= $card->getDayId();
        $this->cardDB->editCard($cardId, $card);
        header("Location: homepage.php?page=listCard&dayId=$dayId");


    }


}