<html><body>

<h1>Days we ate together</h1>

<form action = '.' method = 'post' >
	<table>
	
	
		<th>date</th>
		<th>members</th>
		
		<br />
		
		
		<?php foreach(Meal::find('all') as $oMeal){?>
		
		<tr>
			<td><?php echo $oMeal->date ?></td>
			<td><?php echo $oMeal->members ?></td>
		</tr>
		
		<?php }?>
	
	</table>

<input type = 'submit' name = 'add' value = 'Add Entry'>

</form>

</body></html>