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