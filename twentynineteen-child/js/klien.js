$(function () {
    var num = $("#listing").find("li").length;
    var i = num;

    if(i<=6){
        $(".load-more-button button").hide();
    }
    else {
        $(".load-more-button button").show();
    }

    $(".col-client").slice(0, 6).show();
    $(".load-more-button button").on('click', function (e) {
        e.preventDefault();
        $(".col-client:hidden").slice(0, 6).slideDown();
        if ($(".col-client:hidden").length == 0) {
            $(".load-more-button button").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});