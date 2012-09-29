<!DOCTYPE html>

<!-- 
Website: 	Melanie Gardiner's portfolio website
Developer: Melanie Gardiner
Languages Used: HTML 5
Date Created:	2012-03-02
Last Revised:	2012-09-28

Website Description: Portfolio site for Melanie Gardiner

External files: 
	jquery.lightbox-0.5.js
	jquery.js
	contact.js
	contact.css
	contact.html
 -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
	
	<meta name="description"
		content="Design portfolio of Melanie Gardiner, a graphic designer from Elora, Ontario, Canada" />
	<meta name="keywords"
		content="graphic, design, print, web, photography, photocards, branding, Melanie Gardiner" />
	
	<!-- Favicon Links 
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />-->
	
	<!-- JavaScript link-->
	<script src="./js/main.js" type="text/javascript"></script>
	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/jquery.lightbox-0.5.js" type="text/javascript"></script>
	
	<script type="text/javascript">
			var $jq = jQuery.noConflict();
			$jq(function() {
				$jq('#main ul li a').lightBox();
				$jq('#article p a').lightBox();
				
			});
		</script>
	
	<!--CSS link-->
	<link rel="stylesheet" type="text/css" href="./css/main.css" />
	<link rel="stylesheet" type="text/css"
		href="./css/jquery.lightbox-0.5.css" />
	
	<title>Melanie Gardiner</title>

</head>

<body>
	<div id="page_wrap">

		<div id="header" role="navigation">
			<div id="logo">
				<!-- h1 links back to main page -->
				<h1>
					<a href="/">Melanie Gardiner</a>
				</h1>
			</div><!-- end logo -->

			<!-- list for navbar -->
			<div id="navbar">
				<ul>
					<li><a href="?action=landing">portfolio</a></li>
					<li><a href="?action=store">store</a></li>
					<li><a href="?action=contact">contact me</a></li>
				</ul>
			</div><!-- end navbar -->
		</div><!-- header -->

</body>
</html>
