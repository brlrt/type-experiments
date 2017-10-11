
/*
 * map()-function
 */

function map_range(value, low1, high1, low2, high2) {
    return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
}

// Page transitions

$(document).ready(function() {

    $('#stage').css('display', 'none');
    $('#stage').fadeIn(500);

    $('#navigation a').click(function() {
        event.preventDefault();
        newLocation = this.href;
        $('#stage').fadeOut(500, newpage);
    });

    function newpage() {
        window.location = newLocation;
    }
});
