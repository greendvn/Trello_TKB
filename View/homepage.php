<?php
session_start();
if ($_SESSION["username"] == NULL) {
    header('Location: ../index.php');
}

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

$userController = new UserController();
$cardController = new CardController();
$statusController = new StatusController();


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
<body background="../images/3.jpg">
<?php include "../layout/menu.php" ?>
<?php $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'profile':
        $userController->getProfile();
        break;
    case 'edit':
        $userController->editUser();
        break;
    case 'listCard':
        $cardController->index();
        break;
    case 'editCard':
        $cardController->edit();
        break;
    default:
        include_once 'test.php';
}
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="../js/script.js"></script>

</body>
</html>

