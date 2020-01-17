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
  .on("drop", function(el, container) {
    el.className += "ex-moved";
    let cardId = el.id;
    let cardStatus = container.id;
    $.ajax({
      type: "POST",
      url: "updateCardStatus.php",
      data: {
        cardId: cardId,
        cardStatus: cardStatus
      },
      success: function() {
         // alert(cardId +cardStatus);
      }
    });
  })
.on("over", function(el, container) {
    container.className += "ex-over";
  })
  .on("out", function(el, container) {
    container.className.replace("ex-over", "");
  });



