// Keyboard commands

var szenenwahl = 1;

$( document ).ready(function() {
    launchScene();
});



function launchScene(){
	$("#inner-stage").fadeOut(1000, function () {
	    $('#inner-stage').load('modules/'+szenenwahl+'.html', function(){
			$(this).fadeIn('slow');
		});
	});
	    $('.btn').removeClass('active');
	$('#b'+szenenwahl).addClass('active');
}



// Navigation

$("#navigation").hide();

$("html").mousemove(function( event ) {
    $("#navigation").fadeIn();

    myStopFunction();
    myFunction();
});

function myFunction() {
    myVar = setTimeout(function(){
        $("#navigation").fadeOut();
    }, 1000);
}
function myStopFunction() {
    if(typeof myVar != 'undefined'){
        clearTimeout(myVar);
    }
}


function clickButton(b){
	szenenwahl = b;
    $('.btn').removeClass('active');
	$('#b'+b).addClass('active');
	launchScene();
}


$( '#stage' ).click(function() {
	if (event.pageX > $( window ).width()/2){
		szenenwahl++;
		launchScene();
	} else {
		szenenwahl--;
		launchScene();
	}
});


  $(document).keydown(function(e) {

    if (e.which == 39) {
      szenenwahl++;
	  launchScene();
    }

    if (e.which == 37) {
      szenenwahl--;
	  launchScene();
    }


  });
