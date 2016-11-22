<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/slider.css">
		Not used anymore, left in for reference
		-->
		<link rel="stylesheet" href="css/fonts.css">
		<link rel="stylesheet" href="css/styles.css">

		<?php 
		$var1 = basename($_SERVER["REQUEST_URI"], ".php");
		$var2 = "colophon";
		if(strcmp($var1,$var2)==0){
		?>
		<link rel="stylesheet" href="css/colophon.css">;
		<?php } 
		?>

		<title><?php if (isset($currentTitle)) { echo $currentTitle; } ?><?php if (isset($separator)) { echo $separator; } ?><?php if (isset($parentTitle)) { echo $parentTitle; } ?></title>
	</head>

	<body>
	
	<div class="container">
