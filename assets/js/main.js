$(function() {
    $(".Submenuopt").hover(function() {
        $("#submenu").addClass("submenushow");
        $("#submenu").removeClass("submenuhide");
    }, function() {
        $("#submenu").addClass("submenuhide");
        $("#submenu").removeClass("submenushow");
    });
});