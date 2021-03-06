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
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body background="../images/3.jpg">
<?php include "../layout/menu.php" ?>
<?php include "../layout/navbar.php" ?>
<div class="col0-12 col-12">

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
        case "deleteCard":
            $cardController->deleteCard();
            break;
        default:
            include_once 'list.php';
    }
    ?>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="../js/script.js"></script>

</body>
</html>

