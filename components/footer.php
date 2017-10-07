<nav id="navigation">
	<?php

	$numberOfSketches = 8;

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

</nav>

<script src="main.js"></script>

<?php

	echo '<script src="';
	echo $pageID;
	echo '.js';
	echo '"></script>';

?>

	</body>
</html>
