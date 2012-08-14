<html>
<body>

 //this is the view file




<ul>
<?php foreach($dogs as $dog){ ?>
	<li>
		<?php echo $dog['name'], "<br />"; ?>
		
	</li>
	<?php } ?>
</ul>



</body>
</html>