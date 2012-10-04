<?php include 'head.php'; ?>

<div id="container">

	<div id="main">
		<h2>I'd love to hear from you!</h2>
		<p>Please feel free to contact me through LinkedIn or fill this form
			out. It will email me and I will contact you.</p>
		<form action='.' method='post' id="contact_form">

			<fieldset>

				<legend>Contact me:</legend>

				<p>
					<label for="req_name">Name<span class="sm"> *(required)</span>
					</label>
				</p>
				<p>
					<input type="text" id="req_name" name="req_name" maxlength="40" />
				</p>

				<p>
					<label for="email_">Email<span class="sm"> *(required)</span>
					</label>
				</p>
				<p>
					<input type="text" id="email_" name="email_" maxlength="100" />
				</p>

				<p>
					<label for="phone_">Phone Number<span class="sm"> *(required)</span>
					</label>
				</p>
				<p>
					<input type="text" id="phone_" name="phone_" maxlength="20" />
				</p>

				<p>
					<label for="subject_">Subject<span class="sm"> *(required)</span>
					</label>
				</p>
				<p>
					<input type="text" id="subject_" name="subject_" maxlength="40" />
				</p>

				<p>
					<label for="message">Message<span class="sm"> *(required)</span>
					</label>
				</p>
				<p>
					<textarea id="message" name="message" rows="5" cols="45">Enter your comments here:</textarea>
				</p>

				<div id="button">
					<input type="submit" name='action' value="Send" />
				</div>

			</fieldset>
		</form>

	</div>
	<!-- main -->

	<div id="footer" role="contentinfo">
		<?php include 'footer.php';?>
	</div>
	<!-- footer -->
</div>
<!-- container -->
</div>
<!-- page wrap -->
</body>
	<script src="./js/contact.js" type="text/javascript"></script>

</html>


