<html>
<body>


<form action='.' method="post">

<?php
foreach(Nextaction::find('all') as $sNextaction)
{?>

<p>
	<?php echo $sNextaction->title; ?>

</p>

<?php }?>
	

<input type="text" name="nextaction" />
<input type="submit" name="action" value="Refresh" />

</form>

<table>
	<tr>
		<th>Date Posted</th>
		<th>Title</th>
		<th>Link</th>
		<th>Next Action</th>
	</tr>
	
	<tr>
		
	</tr>

</table>
</body></html>