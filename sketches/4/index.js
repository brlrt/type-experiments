
	var mappedRange;
	var currentWord;
	var a = 0;


// Array

var str = "Hakusan é uma cidade japonesa localizada na província de Ishikawa. Em 2007 a cidade tinha uma população estimada em 110 313 habitantes e uma densidade populacional de 146,1 h/km². Tem uma área total de 755,17 km². Recebeu o estatuto de cidade a 1 de Fevereiro de 2005.";

var string2 = str.replace(/&shy;/g,'');

var string3 = string2.replace(/-/g,'- ');

var arr = string3.split(' ');

// TEXT
// A $( document ).ready() block.
// $(document).mousemove(function(event){
// 	currentWord = arr[0];
// 	mappedRange = Math.floor(arr.length * event.pageX / window.innerWidth);
// 	currentWord = arr[mappedRange];
// 	$('#h1').text(currentWord);
// });

clearInterval(myInterval);

var myInterval = setInterval(function(){
	currentWord = arr[a];
	$('#h1').text(currentWord);
	a++;
}, 500);
