<?php include 'components/overlay.php'; ?>

<?php include 'components/navigation.php'; ?>

<button id="nav-toggle" class="fixed t1s">
	?
</button>

<button id="toggleColor" class="fixed"></button>

<script src="assets/jquery-2.2.4.min.js"></script>
<script src="assets/jquery.mousewheel.min.js"></script>

<script src="main.js"></script>

<?php

$sketchUrl = 'sketches/'.$_GET["file"].'/';

echo '<script src="';
echo $sketchUrl;
echo 'index.js';
echo '"></script>';

?>

	</body>
</html>
