function select_equipos(obj) {
$.ajax({
url: "select_equipos.php?ie=" + obj.options[obj.selectedIndex].value,
success: function (result) {
console.log(result)
$("#jugadores").html(result);
}
});
}