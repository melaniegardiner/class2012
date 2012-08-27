<html><body>


<table>
		<tr>
			
				<th>
					Image
				</<th>
				<th>
					Name
				</<th>
				<th>
					Description
				</<th>
				
			
		</tr>
		
		<?php foreach(Photocard::find('all') as $oPhotocard){?>
	
		<tr>
			<td><img src = 'images/<?php echo $oPhotocard->filename ?>' /></td>
			<td><?php echo $oPhotocard->title ?></td>
			<td><?php echo $oPhotocard->description ?></td>
			
		
		</tr>
</table>
		
<?php } ?>
	

</body></html>