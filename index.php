<?php
if (is_numeric($_GET["file"]) != true ){
	header('Location: index.php?file=01');
} ?>

<?php

 	include 'components/header.php';

	include $sketchUrl.'index.php';

	include 'components/footer.php';

?>
