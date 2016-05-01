<?php
$id = $_GET['id'];
$q = $_GET['q'];
$q = "'".$q."'";
$ele = $_GET['ele'];

$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
								
// select database
mysql_select_db('pb0612_knifefinder', $db);

$sql = "UPDATE help_tickets SET $ele=$q WHERE help_id=$id";
mysql_query($sql, $db);

?>