<html><body><form action='.' method="post">

<?php
foreach(Email::find('all') as $sEmail)
{?>

<p>
	<?php echo $sEmail->email; ?>
	<a href="?action=Delete&email=<?php echo $sEmail->email; ?> ">
	<img src='views/images/deleteCross.png' alt='Delete' />
	</a>
</p>

<?php }?>
	

<input type="text" name="email" />
<input type="submit" name="action" value="Subscribe" />

</form></body></html>


