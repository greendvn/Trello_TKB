<?php
session_start();
if ($_SESSION["username"] == NULL) {
    header('Location: ../index.php');
}
include_once "list.php"
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

</body>
</html>
