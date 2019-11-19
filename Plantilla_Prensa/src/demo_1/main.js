function select_fecha(obj) {
$.ajax({
url: "select_fecha.php?f=" + obj.options[obj.selectedIndex].value,
success: function (result) {
console.log(result)
$("#fecha").html(result);
}
});
}