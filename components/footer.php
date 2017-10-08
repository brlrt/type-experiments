<nav id="overlay" class="topleft flex fixed fullpage">
	<div class="inner h100">
		<div class="w45 h100 p15">
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lore
		</div>
		<div class="w45 h100 p15">
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lore
		</div>
	</div>
</nav>



<button id="nav-toggle" class="fixed t1s topright">
	?
</button>

<nav id="navigation">
	<div id="navbox" class="panamera">
	<?php
	$numberOfSketches = 12;
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
