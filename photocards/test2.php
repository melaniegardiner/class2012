<?php

require_once('../adodb5/adodb.inc.php');
require_once('../adodb5/adodb-active-record.inc.php');

class Email extends ADOdb_Active_Record{}
class Photocard extends ADOdb_Active_Record
{
	var $_dbat = 'mysql';	//uses mysql connection
}


$db = null;

$db = NewADOConnection('mysql');

if($_SERVER['SERVER_PORT'] == 8080)
{
	//$db = NewADOConnection('mysql://root:@localhost/photocards');
	
	$db->Connect("localhost", "root", "", "photocards" );
}
else
{
	//$db = NewADOConnection('mysql://melaniegardiner:liongate@melaniegardiner.netfirmsmysql.com/photocards');
	$db->Connect("melaniegardiner.netfirmsmysql.com:3306", "melaniegardiner", "liongate", "photocards");
	//host name for the db, user, pw, db name
	
}
$result = $db->Execute("SELECT * FROM photocards");
if ($result === false) die("failed");
while (!$result->EOF) {
	for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
		print $result->fields[$i].' ';
		$result->MoveNext();
		print "<br>\n";
}
?>