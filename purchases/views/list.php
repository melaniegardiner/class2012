<html><body>
<form action='.' method='post'>
<input type='submit' name="add" value="add" />


	<table>
		<tr>
			
				<th>
					date
				</<th>
				<th>
					purchase
				</<th>
				<th>
					price
				</<th>
				<th>
					total
				<th>
			
		</tr>
		
		<?php foreach(Purchase::find('all') as $oPurchase){?>
	
		<tr>
			<td><?php echo $oPurchase->date ?></td>
			<td><?php echo $oPurchase->purchase ?></td>
			<td><?php echo $oPurchase->price ?></td>
		
		</tr>
<?php } ?>
	</table>
	<input type='submit' name="add" value="add" />
	
</form>
	

</body></html>
<?php

?>
