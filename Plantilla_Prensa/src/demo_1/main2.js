function select_rosterweek(obj) {
    $.ajax({
    url: "select_rosterweek.php?f=" + obj.options[obj.selectedIndex].value,
    success: function (result) {
    console.log(result)
    $("#roster_week").html(result);
    }
    });
    }