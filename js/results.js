function successDialog(data) {
    var message = "You've just this exercise in " + data.time + "; and your accuracy is " + data.accuracy + "%!";
    $("#modal-message").text(message);
    $("#modal-success").modal("show");
}