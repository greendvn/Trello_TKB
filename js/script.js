/* Custom Dragula JS */
dragula([
  document.getElementById("ToDo"),
  document.getElementById("Doing"),
  document.getElementById("Review"),
  document.getElementById("Done")
])
  .on("drag", function(el) {
    el.className.replace("ex-moved", "");
  })
  .on("drop", function(el) {
    el.className += "ex-moved";
  })
  .on("over", function(el, container) {
    container.className += "ex-over";
    console.log(container).id;
  })
  .on("out", function(el, container) {
    container.className.replace("ex-over", "");
  });

/* Vanilla JS to add a new task */
// function addTask() {
//   /* Get task text from input */
//   var inputTask = document.getElementById("taskText").value;
//   /* Add task to the 'ToDo' column */
//   document.getElementById("ToDo").innerHTML +=
//     "<li class='task'><p>" + inputTask + "</p></li>";
//   /* Clear task text from input after adding task */
//   document.getElementById("taskText").value = "";
// }


