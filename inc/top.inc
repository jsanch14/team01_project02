<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< Updated upstream
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/slider.css">
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

=======
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,greek-ext' rel='stylesheet' type='text/css'>
	<link href="resources/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="resources/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link href="scripts/jstiles/css/tl-style.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/slider.css"/>
		<link rel="stylesheet" href="css/fonts.css"/>

		<link rel="stylesheet" href="css/styles.css"/>
		<link rel="stylesheet" href="css/style.css">
		<link href="js/jstiles/css/tl-style.css" rel="stylesheet"/>
    
>>>>>>> Stashed changes
		<title><?php if (isset($currentTitle)) { echo $currentTitle; } ?><?php if (isset($separator)) { echo $separator; } ?><?php if (isset($parentTitle)) { echo $parentTitle; } ?></title>
	</head>

	<body data-spy="scroll" data-target="#side-nav-affix">
	
	
