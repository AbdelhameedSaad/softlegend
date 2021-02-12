//////Nav Bar Animation///
var $navLinks = $(".navbar-light .navbar-nav .nav-item");
var $nav = $(".navbar");
$(function() {
    ///////\logo in mobile screen//////////////////////


    $(document).scroll(function() {
            var current = location.pathname;

            $('.nav-item a').each(function() {
                var $this = $(this);
                var href = "/" + $this.attr('href');
                // if the current path is like this link, make it active
                if (href == current) {
                    $this.addClass('myActive2');
                }
            });

   
  

    });
    $('.btnContact').click(()=>{
        swal("👍 تم ارسال رسالتك بنجاح");
    });


});
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


