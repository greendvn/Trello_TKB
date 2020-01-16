<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css'>
    <link rel="stylesheet" href="../css/dropdrag.css">


</head>
<body>
        <?php include "../layout/menu.php" ?>
        <div class="col0-12 col-12">
            <?php include "../layout/navbar.php"?>
            <main class="main-container">
                <ul class="columns">

                    <li class="column to-do-column">
                        <div class="column-header">
                            <h4>To Do</h4>
                        </div>
                        <ul class="task-list" id="to-do">
                            <li class="task">
                                <p>Analgffghghjghjysis</p>
                            </li>
                            <li class="task">
                                <p>Coding</p>
                            </li>
                            <li class="task">
                                <p>Card Sorting</p>
                            </li>
                            <li class="task">
                                <p>Measure</p>
                            </li>
                        </ul>
                        <section class="add-task-container">
                            <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
                            <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
                        </section>
                    </li>

                    <li class="column doing-column">
                        <div class="column-header">
                            <h4>Doing</h4>
                        </div>
                        <ul class="task-list" id="doing">
                            <li class="task">
                                <p>Hypothesis</p>
                            </li>
                            <li class="task">
                                <p>User Testing</p>
                            </li>
                            <li class="task">
                                <p>Prototype</p>
                            </li>
                        </ul>
                    </li>

                    <li class="column done-column">
                        <div class="column-header">
                            <h4>Done</h4>
                        </div>
                        <ul class="task-list" id="done">
                            <li class="task">
                                <p>Ideation</p>
                            </li>
                            <li class="task">
                                <p>Sketches</p>
                            </li>
                        </ul>
                    </li>

                    <li class="column trash-column">
                        <div class="column-header">
                            <h4>Trash</h4>
                        </div>
                        <ul class="task-list" id="trash">
                            <li class="task">
                                <p>Interviews</p>
                            </li>
                            <li class="task">
                                <p>Research</p>
                            </li>

                        </ul>
                        <div class="column-button">
                            <button class="button delete-button" onclick="emptyTrash()">Delete</button>
                        </div>
                    </li>

                </ul>
            </main>
        </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="../js/dropdrag.js"></script>

</body>
</html>
