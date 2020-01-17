<?php
include_once "../Controller/UserController.php";
include_once "../Model/user/User.php";
include_once "../Model/user/UserDB.php";
include_once "../Model/DBConnection.php";
include_once "../Controller/CardController.php";
include_once "../Controller/DayController.php";
include_once "../Controller/StatusController.php";
include_once "../Model/card/Card.php";
include_once "../Model/card/CardDB.php";
include_once "../Model/status/Status.php";
include_once "../Model/status/StatusDB.php";

$statusController = new StatusController();
$cardController = new CardController();
$cardId =$_POST["cardId"];
$cardStatus =$_POST["cardStatus"];
$idStatus = $statusController->getStatusId($cardStatus);
$cardController->editStatus($cardId,$idStatus);

