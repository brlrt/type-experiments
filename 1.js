
	$(document).mousemove(function(e) {
	  $('#rotateMe').css('transform', 'rotateX(0deg) rotateY(0deg)');

	  var rotate_X;
	  var rotate_Y;
	  var invert = false;

	  if (invert) {
	    rotate_X = e.pageX*0.1;
	    rotate_Y = e.pageY*0.1;
	  } else if (!invert) {
	    rotate_X = e.pageX*0.1;
	    rotate_Y = -e.pageY*0.1;
	  }

	  $('#rotateMe').css('transform', 'rotateX(' + rotate_Y + 'deg) rotateY(' + rotate_X + 'deg)')
	});
