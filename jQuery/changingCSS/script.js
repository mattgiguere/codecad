$(document).ready(function(){
    $('div').mouseenter(function() {
        $("div").height("200px");
        $("div").width("200px");
        $("div").css("border-radius", 10);
    });
    $('div').mouseleave(function() {
        $('div').height('50px');
        $("div").width("300px");
        $('div').css('border-radius', 0);
    });
});
