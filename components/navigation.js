/*
** NAVIGATION
*/

$( document ).ready(function() {

    $(document).keydown(function(e) {
        switch(e.which) {
            case 49:
                // 1
                window.location.href = 'sketches/php/1.php';
                break;
            case 50:
                // 2
                window.location.href = 'sketches/php/2.php';
                break;
            case 51:
                // 3
                window.location.href = 'sketches/php/3.php';
                break;
            case 52:
                // 4
                window.location.href = 'sketches/php/4.php';
            break;
            case 53:
                // 5
                window.location.href = 'sketches/php/5.php';
            break;
            case 54:
                // 6
                window.location.href = 'sketches/php/6.php';
            break;
            case 55:
                // 7
                window.location.href = 'sketches/php/7.php';
            break;
            case 56:
                // 8
                window.location.href = 'sketches/php/8.php';
            break;
            default:
                // Nothing
        }


    });

    

});
