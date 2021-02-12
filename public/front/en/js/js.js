//////Nav Bar Animation///

///End NavBar Animation///////


//////Nav Bar Active Click Animation///////

/////Start Up botton//////////////////////

$(document).scroll(function() {
    if ($(this).scrollTop() > 1000) {
        $(".up").css("opacity", "1");
    } else {
        $(".up").css("opacity", "0");
    }
});
$(".up").click(function() {

    $("body,html").animate({ scrollTop: "0" }, 200);


});

//////End Up botton///////////////////////////////////////////////