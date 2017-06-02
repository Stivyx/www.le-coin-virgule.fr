//Rajoute une class pour le menu active (langue)
$(function(){
    $("#menu-item-42").addClass("current-menu-item");

    if ( $("#menu-item-43").hasClass("current-menu-item") === true ) {
        $("#menu-item-42").removeClass("current-menu-item");
    }
});