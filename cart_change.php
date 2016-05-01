<?php

$id = $_GET['id'];
$q = $_GET['q'];

//connect to server					
$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
								
// select database
mysql_select_db('pb0612_knifefinder', $db);

$sql2 = "UPDATE cart_list SET quantity=$q WHERE id=$id";
mysql_query($sql2, $db);

?>