<?php
include_once "../Model/DBConnection.php";
include_once "../Controller/StatusController.php";
include_once "../Model/status/Status.php";
include_once "../Model/status/StatusDB.php";

$statusController = new StatusController();
$listStatus = $statusController->getListStatus();
$dayId = $_GET["dayId"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodePen - Simple Drag and Drop Lean Kanban Board Tool</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css'>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <h1>Drag & Drop<br/><span>Lean Kanban Board</span></h1>
</header>

<section class="add-task-container">
    <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
    <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
</section>

<main class="main-container">
    <ul class="columns">
        <?php foreach ($listStatus as $status): ?>
            <li class="column <?php echo $status->getCardStatus() ?>-column">
                <div class="column-header">
                    <h4><?php echo $status->getCardStatus() ?></h4>
                </div>
                <ul class="task-list " id="<?php echo $status->getCardStatus() ?>">

                    <?php foreach ($cards as $card): ?>
                        <li class="task">
                            <p><?php
                                if ($card->getDayId() == $dayId && $card->getStatusId() == $status->getId())
                                    echo $card->getName();
                                ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>


    </ul>
</main>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="../js/script.js"></script>

</body>
</html>
