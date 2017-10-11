/*
** KEYBOARD NAVIGATION
*/

$( document ).ready(function() {

    $(document).keydown(function(e) {
        switch(e.which) {
            case 49:
                // 1
                window.location.href = 'index.php?file=01';
                break;
            case 50:
                // 2
                window.location.href = 'index.php?file=02';
                break;
            case 51:
                // 3
                window.location.href = 'index.php?file=03';
                break;
            case 52:
                // 4
                window.location.href = 'index.php?file=04';
            break;
            case 53:
                // 5
                window.location.href = 'index.php?file=05';
            break;
            case 54:
                // 6
                window.location.href = 'index.php?file=06';
            break;
            case 55:
                // 7
                window.location.href = 'index.php?file=07';
            break;
            case 56:
                // 8
                window.location.href = 'index.php?file=08';
            break;
            default:
                // Nothing
        }
    });
});

$('#nav-toggle').click(function(){
    $('#overlay').toggleClass('active');
    $(this).toggleClass('active');
    $('body').removeClass('invert');
});


$('#toggleColor').click(function(){
    $('body').toggleClass('invert');
});
