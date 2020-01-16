<?php
include_once "Model/card/Card.php";
include_once "Model/card/CardDB.php";
include_once "Model/DBConnection.php";
include_once "Controller/CardController.php";

$cardController = new CardController();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'edit';
        $cardController->edit();
        break;
    case 'description';
        $cardController->cardDescription();
        break;
    case 'delete';
        $cardController->deleteCard();
        break;
    case 'add';
        $cardController->createCard();
        break;
    default:
        $cardController->index();
        break;
}

?>
</body>
</html>
