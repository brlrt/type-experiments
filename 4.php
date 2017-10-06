<?php include 'header.php'; ?>

<style>

	.fullpage {
		width: 100%;
		height: 100vh;
		background-color: black;
	}

	.a {
		width: 50%;
		height: 100vh;
		overflow: hidden;
		white-space: normal !important;
		}

	.wrap {
		white-space: nowrap !important;

	}

</style>

<div class="stage bg">

	<div class="parent fullpage">

		<div class="child fullpage eins">
			<h2 class="h1">
			Not to value and employ men of superior ability is the way to keep the people from rivalry among themselves; not to prize articles which are difficult to procure is the way to keep them from becoming thieves; not to show them what is likely to excite their desires is the way to keep their minds from disorder. Therefore the sage, in the exercise of his government, empties their minds, fills their bellies, weakens their wills, and strengthens their bones. He constantly (tries to) keep them without knowledge and without desire, and where there are those who have knowledge, to keep them from presuming to act (on it). When there is this abstinence from action, good order is universal.
			</h2>
		</div>

		<div class="a child">
			<div class="fullpage wrap zwei">
				<h2 class="h2">
		When the intelligent and animal souls are held together in one embrace, <br>
		they can be kept from separating. When one gives undivided attention to <br>
		the (vital) breath, and brings it to the utmost degree of pliancy, he can <br>
		become as a (tender) babe. When he has cleansed away the most mysterious <br>
		sights (of his imagination), he can become without a flaw. In loving the <br>
		people and ruling the state, cannot he proceed without any (purpose of) <br>
		action? In the opening and shutting of his gates of heaven, cannot he do <br>
		so as a female bird? While his intelligence reaches in every direction, cannot <br>
		he (appear to) be without knowledge? (The Dao) produces (all things) and <br>
		nourishes them; it produces them and does not claim them as its own; it does <br>
		all, and yet does not boast of it; it presides over all, and yet does not control them. This is what is called 'The mysterious Quality' (of the Dao).
				</h2>
			</div>
		</div>


	</div>

</div>

<script>


$( document ).on( "mousemove", function( event ) {
	var x = event.pageX;
	$('.a').css('width',x);
});

</script>

<?php include 'footer.php'; ?>
