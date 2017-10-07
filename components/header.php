<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="style.css" rel="stylesheet">
		<script src="assets/jquery-2.2.4.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
	</head>
<body class="white">

<?php

// Hol Dir den Dateinamen

	$filename = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */

	$pageID = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

?>
