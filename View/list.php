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

                </ul>
            </li>

            <li class="column Review-column">
                <div class="column-header">
                    <h4><?php echo $listStatus[2]->getCardStatus() ?></h4>
                </div>
                <ul class="task-list" id="Review">
                    <li class="task">
                        <p>Ideation</p>
                    </li>
                    <li class="task">
                        <p>Sketches</p>
                    </li>
                </ul>
            </li>

            <li class="column Done-column">
                <div class="column-header">
                    <h4><?php echo $listStatus[3]->getCardStatus() ?></h4>
                </div>
                <ul class="task-list" id="Done">
                    <li class="task">
                        <p>Interviews</p>
                    </li>
                    <li class="task">
                        <p>Research</p>
                    </li>

                </ul>

            </li>
        </ul>
    </main>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/script.js"></script>
<script type="text/javascript">



</script>
</body>
</html>
