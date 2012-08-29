<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />

<title>Melanie Gardiner::Photography</title>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>

	<div id="page_wrap">
		<div id="container">

			<div id="main">
				<div id="header"></div>
				<div id="sidebar">
					<h1>Melanie Gardiner</h1>
					<h2>Photography by Melanie Gardiner</h2>
					<h3>Catalogue</h3>
					<p>Photocards are printed in full colour on thick card stock. Blank
						inside. Envelope included.</p>
					<p>$4 each</p>
				</div>


				<div id="catalogue">

					<?php foreach(Photocard::find('all') as $oPhotocard){?>

						<div id="article">
							
								<p class="image"><a href="."></a>
								<img src='images/<?php echo $oPhotocard->filename ?>' /></p>
								<p><?php echo $oPhotocard->title ?></p>
								<p><?php echo $oPhotocard->description ?></p>
			
						</div>
					
					<?php } ?>
					
				</div><!-- end  catalogue -->
				
					<?php include 'views/footer.php'?>
				
			</div><!-- end  main -->
			

		</div>		<!-- end container -->

	</div><!-- end pagewrap -->
	



</body>
</html>
