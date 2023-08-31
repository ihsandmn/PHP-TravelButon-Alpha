//Menu Klik
var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function klikmenu(){
    tombolMenu.click(function(){
        menu.toggle();
    });
    menu.click(function(){
        menu.toggle();
    });
}

$(document).ready(function () {
    var width = $(window).width();
    if (width < 989) {
        klikmenu();
    }
})

//Check Lebar
$(window).resize(function () {
    var width = $(window).width();
    if(width > 989){
        menu.css("display","block");
        //display:block
    } else {
        menu.css("display","none");
    } 
    klikmenu();
});
