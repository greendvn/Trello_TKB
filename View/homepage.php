<?php

include "../Controller/UserController.php";
include "../Model/user/User.php";
include "../Model/user/UserDB.php";
include "../Model/DBConnection.php";

$userController = new UserController();

session_start();
if ($_SESSION["username"] == NULL) {
    header('Location: ../index.php');
}

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
    default:
        include_once 'test.php';
}
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="../js/script.js"></script>

</body>
</html>

