
<?php include 'head.php'?>
<div = "main">
	<form action='.' method='post'>

		<fieldset>

			<legend>Contact me:</legend>
			<p>
				<label for="email">Your email:</label><input id="email" type="text"
					name="email" />
			</p>
			<p>
				<label for="subject">Subject:</label><input id="subject" type="text"
					name="subject" />
			</p>
			<p>
				<label for="message">Message:</label>
			</p>
			<textarea cols="35" rows="10" id="message" name="message"></textarea>

			<div id="button">
				<input type="submit" name='action' value="Send" />
			</div>

		</fieldset>
	</form>
</div>
<!-- main -->

<div id="footer" role="contentinfo">
	<?php include 'footer.php'?>
</div>
<!-- footer -->
