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
        $card_id = $_GET['id'];
        $this->cardDB->delete($card_id);
        header("local: index.php");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $card = $this->cardDB->getCardById($_GET['cardId']);
            include_once "edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $card_id = $_GET['id'];
            $card = new Card($_POST['name'],
                $_POST['user_id'],
                $_POST['status_id'],
                $_POST['day_id']);
            $this->cardDB->editCard($card_id, $card);
            header("Location: index.php");
        }
    }

    public function cardDescription()
    {
        $card_id = $_GET['id'];
        $card = $this->cardDB->getCardById($card_id);

        include_once "../View/description.php";
    }
}