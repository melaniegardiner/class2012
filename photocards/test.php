<?php

$link = mysql_connect('melaniegardiner.netfirmsmysql.com', 'melaniegardiner', 'liongate');
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db(photocards);


// Retrieve all the data from the "example" table
$result = mysql_query("SELECT * FROM photocards")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_array( $result ))
{
	echo "Name: ".$row['title'];
	echo " Age: ".$row['description'];
}
// Print out the contents of the entry



?>