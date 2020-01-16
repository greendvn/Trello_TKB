/* Custom Dragula JS */
dragula([
    document.getElementById("ToDo"),
    document.getElementById("Doing"),
    document.getElementById("Review"),
    document.getElementById("Done")
])
    .on("drag", function (el) {
        el.className.replace("ex-moved", "");
    })
    .on("drop", function (el) {
        el.className += "ex-moved";
    })
    .on("over", function (el, container) {
        container.className += "ex-over";
        let cardId = el.id;
        let status = container.id;
        let day = $(container).closest("main").attr("id");
        console.log(day);
        console.log(cardId);
        console.log(status);
        $.ajax({
            url: 'updateCardStatus.php',
            type: 'POST',
            data: {
                'cardId': cardId,
                'status': status,
                'day': day
            },
        }).done(function (data) {
            console.log(data);
        });
    })
    .on("out", function (el, container) {
        container.className.replace("ex-over", "");
    });

/* Vanilla JS to add a new task */
function addTask() {
    /* Get task text from input */
    var inputTask = document.getElementById("taskText").value;
    /* Add task to the 'To Do' column */
    document.getElementById("ToDo").innerHTML +=
        "<li class='task'><p>" + inputTask + "</p></li>";
    /* Clear task text from input after adding task */
    document.getElementById("taskText").value = "";
}

