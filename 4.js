
	var mappedRange;
	var currentWord;
	var a = 0;


// Array


var str = "Alles was blüht, vergeht.";

var string2 = str.replace(/&shy;/g,'');

var string3 = string2.replace(/-/g,'- ');

var arr = string3.split(' ');

// TEXT
// A $( document ).ready() block.


		$(document).mousemove(function(event){
			currentWord = arr[0];
			mappedRange = Math.floor(arr.length * event.pageX / window.innerWidth);
			currentWord = arr[mappedRange];
			$('#h1').text(currentWord);
});
