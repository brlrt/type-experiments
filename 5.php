
<?php include 'header.php'; ?>

<div class="flex-center" id="stage">
	<h1 id="h1" class="h1">Hey!</h1>
</div>



<script>

	var mappedRange;
	var currentWord;
	var a = 0;


// Array


	var str = "Creative coding is a rising discipline, inspiring and connecting thousands of people worldwide. Open Source software tools lay the foundation for a new generation of artists and designers, using the internet to exchange, learn, teach, share, exhibit and connect, regardless of ethnicity, nation­ality, age, religion or gender. Creative coding reveals completely new opportunities in many ways. And this is just the beginning of the story.";

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

</script>

<?php include 'footer.php'; ?>
