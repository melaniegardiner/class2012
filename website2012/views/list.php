<html>
<body>

	<div id="page_wrap">
		<?php include 'head.php'; ?>

		<div id="container">

			<div id="main">
				<div id="left-list">
					<h2>Photography</h2>
					<h3>Greeting card catalogue</h3>
	
					<p>Photocards are printed in full colour on thick card stock.</p>
					<p>Blank inside.</p>
					<p>Envelope included.</p>
				</div>
				
				<!-- start catalogue -->
				<div id="catalogue">

					<?php 
					$result = $db->Execute("SELECT * FROM photocards");
					if ($result === false) die("failed");
					while (!$result->EOF)
					{
						//foreach(Photocard::find('all') as $oPhotocard){
						?>

						<div class="article">

							<p class="image">
								<a href="."></a> <img
									src='images/<?php print $result->fields['fileName']; ?>'
									width="140" height="175"
									alt="<?php print $result->fields['title']; ?>" />
							</p>
							<p>
								<?php print $result->fields['title'];?>
							</p>
							<p>
								<?php 
								print $result->fields['description'];
								?>
							</p>

						</div>

						<?php $result->MoveNext(); 
					} ?>

				</div><!-- end  catalogue -->
				
			</div><!-- end  main -->

			<div id="footer" role="contentinfo">
				<?php include 'footer.php';?>
			</div><!-- end footer -->

		</div><!-- end container -->

	</div><!-- end pagewrap -->

</body>
</html>
