$(document).ready(function() {
    $('#text').toggle(function() {
        $('#text').addClass('highlighted');
    }, 
    function(){
        $('#text').removeClass('highlighted');
    });
});