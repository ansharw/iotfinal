$(document).ready(function () {
    $("#dashboardNav").addClass('active');

    $("#search").on("keypress", function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
}); 