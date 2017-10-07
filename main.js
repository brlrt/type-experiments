
/*
 * map()-function
 */

function map_range(value, low1, high1, low2, high2) {
    return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
}


/*
 * Easing Functions - inspired from http://gizma.com/easing/
 * only considering the t value for the range [0, 1] => [0, 1]
 */
EasingFunctions = {
  // no easing, no acceleration
  linear: function (t) { return t },
  // accelerating from zero velocity
  easeInQuad: function (t) { return t*t },
  // decelerating to zero velocity
  easeOutQuad: function (t) { return t*(2-t) },
  // acceleration until halfway, then deceleration
  easeInOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t },
  // accelerating from zero velocity
  easeInCubic: function (t) { return t*t*t },
  // decelerating to zero velocity
  easeOutCubic: function (t) { return (--t)*t*t+1 },
  // acceleration until halfway, then deceleration
  easeInOutCubic: function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 },
  // accelerating from zero velocity
  easeInQuart: function (t) { return t*t*t*t },
  // decelerating to zero velocity
  easeOutQuart: function (t) { return 1-(--t)*t*t*t },
  // acceleration until halfway, then deceleration
  easeInOutQuart: function (t) { return t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t },
  // accelerating from zero velocity
  easeInQuint: function (t) { return t*t*t*t*t },
  // decelerating to zero velocity
  easeOutQuint: function (t) { return 1+(--t)*t*t*t*t },
  // acceleration until halfway, then deceleration
  easeInOutQuint: function (t) { return t<.5 ? 16*t*t*t*t*t : 1+16*(--t)*t*t*t*t }
}

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
