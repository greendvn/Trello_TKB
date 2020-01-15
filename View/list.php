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
            <nav class="navbar navbar-expand-lg navbar-light btn-secondary">
                <a class="navbar-brand" href="#" style="padding-left: 250px">Monk-Eyes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Log Out</a>
                                <a class="dropdown-item" href="#">Home</a>
                                <a class="dropdown-item" href="#">Review</a>
                                <a class="dropdown-item" href="#">Menu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <div class="mx-auto" style="width: 300px;">
                        <h3><img src="../images/2.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">TiCo
                        </h3>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item avatar">
                            <a class="nav-link p-0" href="#">
                                <img src="../images/1.png" class="rounded-circle z-depth-0"
                                     alt="avatar image" height="35">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <table class="table">
                            <div class="col0-12 col-12">
                                <main class="main-container">
                                    <ul class="columns">

                                        <li class="column to-do-column">
                                            <div class="column-header">
                                                <h4>To Do</h4>
                                            </div>
                                            <ul class="task-list" id="to-do">
                                                <li class="task">
                                                    <p>Analysis</p>
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
                                                <input type="text" maxlength="12" id="taskText"
                                                       placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                        document.getElementById('add').click()">
                                                <button id="add" class="button add-button" onclick="addTask()">Add New
                                                    Task
                                                </button>
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
                                                <button class="button delete-button" onclick="emptyTrash()">Delete
                                                </button>
                                            </div>
                                        </li>

                                    </ul>
                                </main>
                            </div>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
                            <script src="../js/dropdrag.js"></script>

</body>
</html>
