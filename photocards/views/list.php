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
					<h2>Photography</h2>
					<h3>Greeting card catalogue</h3>
					
					<p>Photocards are printed in full colour on thick card stock.</p> 
					<p>Blank inside. </p>
					<p>Envelope included.</p>
					
					<!-- contact form -->
					<form action = '.' method = 'post'>
						<fieldset>
						
							<legend>Contact me:</legend>
							<p><label for="email">Your email:</label><input id="email" type = "text" name = "email" /></p>
							<p><label for="subject">Subject:</label><input id="subject" type = "text" name = "subject" /></p>
							<p><label for="message">Message:</label></p>
							<textarea cols="35" rows="10" id="message" name = "message"></textarea>
							
							<div id="button">
								<input type = "submit" name = 'action' value = "Send"  />
							</div>
					
					</fieldset>
					</form>
				</div>

				<!-- start catalogue -->
				
				<div id="catalogue">

					<?php foreach(Photocard::find('all') as $oPhotocard){?>

						<div class="article">
							
								<p class="image"><a href="."></a>
								<img src='images/<?php echo $oPhotocard->filename ?>' width="140" height="175" alt="<?php echo $oPhotocard->title ?>"/></p>
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
