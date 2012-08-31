<html>
<body>

<form action='.' method="post">
		
	<table>
		<tr>
			<th>Date Posted</th>
			<th>Title</th>
			<th>Link</th>
			<th>Next Action</th>
		</tr>
		
		<tr>
			<td>
				<?php
					foreach(Nextaction::find('all') as $oNextaction)
				{?>
			</td>
			
			<td><?php echo $oNextaction->pubdate?> </td>
			<td><?php echo $oNextaction->title?> </td>
			<td><?php echo $oNextaction->link?> </td>
			
			<td><input type="text" name="nextaction" /> </td>
			
		</tr>
	
	</table>
	
	<input type="submit" name="action" value="Refresh" />

</form>
</body></html>