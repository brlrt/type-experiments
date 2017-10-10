<nav id="overlay" class="topleft flex fixed fullpage">
	<div class="inner h100">
		<div class="w45 h100 p25">
			<p>
				HAKUSAN – a collection of typographic experiments with Japan-related text-fragments.</p>
			<p>
				Coded by <a target="_blank" href="http://www.timrodenbroeker.de">Tim Rodenbröker</a>.</p>
		</div>
		<div class="w45 h100 p25">
			<p>
			Fonts:<br />
			<a target="_blank" href="http://www.bb-bureau.fr/post/54693199038/mineral">Mineral</a><br />
			<a target="_blank" href="https://github.com/uplaod/Panamera">Panamera</a><br />
			<a target="_blank" href="http://martinwecke.de/lab-mono/">Lab Mono</a><br />
			<a target="_blank" href="https://github.com/CatharsisFonts/Cormorant">Cormorant</a><br />
			<a target="_blank" href="https://www.behance.net/gallery/50739967/SM-Maxville-Typeface">SM Maxeville</a>
			</p>
		</div>
	</div>
</nav>



<button id="nav-toggle" class="fixed t1s">
	?
</button>

<button id="toggleColor" class="fixed"></button>

<nav id="navigation">
	<div id="navbox" class="">
	<?php
	$numberOfSketches = 10;
	for ($x = 1; $x <= $numberOfSketches; $x++) {
	    echo '<a id="link';
		echo $x;
		echo '"';
		if ($pageID == $x){
			echo ' class="active"';
		}
		echo ' href="';
		echo $x;
		echo '.php">';
		echo $x;
		echo '</a>';
	}
	?>
	</div>
</nav>

<script src="assets/jquery-2.2.4.min.js"></script>

<script src="main.js"></script>

<?php
	echo '<script src="';
	echo $pageID;
	echo '.js';
	echo '"></script>';
?>
	</body>
</html>
