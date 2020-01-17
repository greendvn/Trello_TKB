<?php
include_once "../Model/DBConnection.php";
include_once "../Model/day/Day.php";
include_once "../Model/day/DayDB.php";
include_once "../Model/status/StatusDB.php";
include_once "../Model/status/Status.php";
include_once "../Controller/DayController.php";
include_once "../Controller/StatusController.php";
include_once "../Controller/UserController.php";

$dayController = new DayController();
$listDay = $dayController->getListDay();
$statusController = new StatusController();
$listStatus = $statusController->getListStatus();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'>
    <link rel="stylesheet" href="../css/day.css">

</head>
<body>
<div class="col-12 col-12">
    <main class="main-container">
        <ul class="columns">
            <li class="column ToDo-column">
    <header>
        <h1>Drag & Drop<br/><span>Lean Kanban Board</span></h1>
    </header>
    <section class="add-task-container">
        <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
        <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
    </section>


    <main class="main-container" id="colum1">
        <ul class="columns" >
            <li class="column ToDo-column" >
                <div class="column-header">
                    <h4><?php echo $listStatus[0]->getCardStatus() ?></h4>
                </div>

                <ul class="task-list" id="ToDo">
                    <?php foreach ($listDay as $day): ?>
                        <li class="task" id="<?php echo $day->getDay() ?>">
                            <p><?php echo $day->getDay() ?></p>
                        </li>
                    <?php endforeach; ?>
                    <section class="add-task-container">
                        <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
                        <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
                    </section>
                </ul>
            </li>


            <li class="column Doing-column">
                <div class="column-header">
                    <h4><?php echo $listStatus[1]->getCardStatus() ?></h4>
                </div>
                <ul class="task-list" id="Doing">
                    <li class="task">
                        <p>Ideation</p>
                    </li>

<h1 class="title">TiCo</h1>

<div id="app" class="container">
    <?php foreach ($listDay as $day): ?>
        <card data-image="../images/days/<?php echo $day->getId() ?>.jpg">
            <h1 slot="header"><?php echo $day->getDay() ?></h1>
            <p slot="content"><a href="homepage.php?page=listCard&dayId=<?php echo $day->getId() ?>">
                    Click here to start.</a></p>
        </card>
    <?php endforeach; ?>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
<script src="../js/day.js"></script>
<script src="../js/script.js"></script>

</body>
</html>
