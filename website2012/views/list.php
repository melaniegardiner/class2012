<?php include 'head.php'; ?>

<div id="container">

	<div id="main">
		<h2>Greeting card catalogue</h2>
		<p>Photocards are printed in full colour on thick card stock. Blank
			inside. Envelope included.</p>

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
				<ul>
					<li class="image"><a
						href="images/<?php print $result->fields['bigImage']; ?>"> <img
							src='images/<?php print $result->fields['fileName']; ?>'
							width="140" height="175"
							alt="<?php print $result->fields['title']; ?>" />
					</a>
					</li>
				</ul>
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

		</div>
		<!-- end  catalogue -->

	</div>
	<!-- end  main -->

	<div id="footer" role="contentinfo">
		<?php include 'footer.php';?>
	</div>
	<!-- end footer -->

</div>
<!-- end container -->

</div>
<!-- end pagewrap -->

</body>
	<script src="./js/jquery.js" type="text/javascript"></script>
	
	<script src="./js/jquery.lightbox-0.5.js" type="text/javascript"></script>
	
	<script type="text/javascript">
			var $jq = jQuery.noConflict();
			$jq(function() {
				$jq('#main ul li a').lightBox();
				$jq('#article p a').lightBox();
				
			});
		</script>
</html>
