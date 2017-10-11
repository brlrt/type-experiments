<?php
if (is_numeric($_GET["file"]) != true ){
	header('Location: index.php?file=01');
} ?>

<?php define("ROOTVZ", $_SERVER['DOCUMENT_ROOT']);

 	include ROOTVZ.'/components/header.php';

	include $sketchUrl.'index.php';

	include ROOTVZ.'/components/footer.php';

?>
