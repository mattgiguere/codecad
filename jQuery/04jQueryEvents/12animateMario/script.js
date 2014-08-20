$(document).ready(function() {
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
            // Left arrow key pressed
            case 37:
                $('img').animate({left: "-=10px"}, 50);
                break;
            // Up Arrow Pressed
            case 38:
                // Put our code here
                $('img').animate({top: "-=10px"}, 50);
                break;
            // Right Arrow Pressed
            case 39:
                // Put our code here
                $('img').animate({left: "+=10px"}, 50);
                break;
            // Down Array Pressed
            case 40:
                // Put our code here
                $('img').animate({top: "+=10px"}, 50);
                break;
        }
    });
});