<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="style.css" rel="stylesheet">

		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<?php

		// Hol Dir den aktuellen Dateinamen aus der URL

			$filename = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
			$pageID = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

			// Lade das dazu passende Stylesheet
			echo '<link href="';
			echo $pageID;
			echo '.css';
			echo '" rel="stylesheet">';
		?>
	</head>
<body class="white">
