<html>
<body>

<form action='.' method="post">
		
	<table>
		<tr>
			<td>Date Posted:</td>
			<td>	
				<?php
					foreach(Nextaction::find('all') as $oNextaction)
					echo $oNextaction->pubdate?>
			</td>		
		</tr>
		<tr>
			<td>Title:</td>
			<td>	
				<?php
					foreach(Nextaction::find('all') as $oNextaction)
					echo $oNextaction->title?>
			</td>
		</tr>	
		<tr>
			<td>Link:</td>
			<td>	
				<?php
					foreach(Nextaction::find('all') as $oNextaction)
					echo $oNextaction->link?>
			</td>		
		</tr>	
		<tr>
			<td>Posted by:</td>
			<td>	
				<?php
					foreach(Nextaction::find('all') as $oNextaction)
					echo $oNextaction->author?>
			</td>		
		</tr>	
		<tr>
			<td>Next Action:</td>
			<td>	
				<select name="status">
  					<option value="Perform research">Perform research</option>
  					<option value="Send resume">Send resume</option>
  					<option value="Prepare for Interview">Prepare for Interview</option>
  					<option value="Attend Interview">Attend Interview</option>
  					<option value="Send Thank-you">Thank-you</option>
  					<option value="Follow-up">Follow-up</option>
  					<option value="None">None</option>
  					
				</select>
			</td>		
		</tr>	
	
	
		<input type="submit" name="action" value="Go Back to Listing" />
	</table>
	
</form>
</body></html>