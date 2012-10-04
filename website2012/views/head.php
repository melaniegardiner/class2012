<!DOCTYPE html>

<!-- 
Website: 	Melanie Gardiner's portfolio website
Developer: Melanie Gardiner
Languages Used: HTML 5
Date Created:	2012-03-02
Last Revised:	2012-10-04

Website Description: Portfolio site for Melanie Gardiner

External files: 
	jquery.lightbox-0.5.css
	main.css
	contact.php
	footer.php
	form_thankyou.php
	head.php
	list.php
	store.php
	index.php
 -->
<html lang="en">

<head>
	<meta charset="UTF-8" />
			
	<meta name="description" content="Portfolio of Melanie Gardiner, a web designer and developer from Elora, Ontario, Canada" />
	<meta name="keywords" content="graphic, design, print, web, development, photography, branding, Melanie Gardiner" />
	
	<title>Melanie Gardiner::<?php echo $action; ?></title>
		
	<!-- Favicon Links 
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />-->
	
	<!-- JavaScript link
	<script src="./js/main.js" type="text/javascript"></script>-->
	

	
	<!--CSS link-->
	<link rel="stylesheet" type="text/css" href="./css/main.css" />
	<link rel="stylesheet" type="text/css"
		href="./css/jquery.lightbox-0.5.css" />
	
</head>

<body>
	<div id="page_wrap">

		<div id="header" role="navigation">
			<div id="logo">
				<!-- h1 links back to main page -->
				<h1>
					<a href="?action=portfolio">Melanie Gardiner</a>
				</h1>
			</div><!-- end logo -->

			<!-- list for navbar -->
			<div id="navbar">
				<ul>
					<li><a href="?action=portfolio">portfolio</a></li>
					<li><a href="?action=store">store</a></li>
					<li><a href="?action=contact">contact me</a></li>
				</ul>
			</div><!-- end navbar -->
		</div><!-- header -->
