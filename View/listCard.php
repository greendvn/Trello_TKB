<?php
include_once "../Model/DBConnection.php";
include_once "../Controller/StatusController.php";
include_once "../Model/status/Status.php";
include_once "../Model/status/StatusDB.php";
include_once "../Model/card/Card.php";
include_once "../Model/card/CardDB.php";
include_once "../Controller/CardController.php";

$cardController = new CardController();
$statusController = new StatusController();
$listStatus = $statusController->getListStatus();
$dayId = $_GET["dayId"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nameCard = $_POST["cardName"];
    $newCard = new Card($nameCard,$_SESSION["id"],1,$dayId);
    $cardController->createCard($newCard);
    header("Location: homepage.php?page=listCard&dayId=$dayId");
}
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


<main class="main-container">
    <ul class="columns">
        <?php foreach ($listStatus as $status): ?>

            <li class="column <?php echo $status->getCardStatus() ?>-column">
                <div class="column-header">
                    <h4><?php echo $status->getCardStatus() ?></h4>
                </div>
                <ul class="task-list " id="<?php echo $status->getCardStatus() ?>">

                    <?php
                    $cardByStatus = $cardController->filterCardByStatusAndDay($status->getId(), $dayId, $cards);
                    foreach ($cardByStatus as $card):
                        ?>
                        <li class="task" onclick="window.location.href ='homepage.php?page=editCard&cardId=<?php echo $card->getId()?>'">
                            <p><?php
                                echo $card->getName();
                                ?></p>
                        </li>

                    <?php endforeach; ?>
                    <?php if ($status->getCardStatus() == "ToDo"): ?>
                        <section class="add-task-container">
                            <form method="post">
                                <input type="text" maxlength="12" id="taskText" name="cardName"
                                       placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
                                <button type="submit" id="add" class="button add-button">Add New Task</button>
                            </form>
                        </section>
                    <?php endif; ?>
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
