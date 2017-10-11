<!DOCTYPE html>
<html lang="en">
	<head>

		<link href="/style.css" rel="stylesheet">

		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

		<base href="/">

		<?php

		// Stylesheet laden

		$sketchUrl = 'sketches/'.$_GET["file"].'/';

		echo '<link href="';
		echo $sketchUrl;
		echo 'index.css';
		echo '" rel="stylesheet">';

		?>

	</head>
<body class="white">
