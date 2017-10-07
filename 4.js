
	var mappedRange;
	var currentWord;
	var a = 0;


// Array


var str = "O país é um arquipélago de 6 852 ilhas, cujas quatro maiores são Honshu, Hokkaido, Kyushu e Shikoku, representando em conjunto 97% da área terrestre nacional.";

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
