<nav id="navigation">
	<div id="navbox">

<?php

	$directory = 'sketches/';

	//get all files in specified directory
	$files = glob( $directory . "*");

	//print each file name
	foreach($files as $file)
	{

		$justTheNumber = str_replace("sketches/","",$file);

		echo '<a id="link';
		echo '"';
		if ($_GET["file"] == $justTheNumber){
			echo ' class="active"';
		}
		echo ' href="';
		echo 'index.php?file='.str_replace("sketches/","",$file);
		echo '">';
		echo $justTheNumber;
		echo '</a>';

		//check to see if the file is a folder/directory
		if(is_dir($file)) {

		}
	}
?>
	</div>
</nav>
