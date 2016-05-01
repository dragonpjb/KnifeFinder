<?php
$id = $_GET['id'];
$q = $_GET['q'];
$q = "'".$q."'";
$ele = $_GET['ele'];

//connect to server					
$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t288');
								
// select database
mysql_select_db('pb0612_knifefinder', $db);

$sql2 = "UPDATE products SET $ele=$q WHERE product_id=$id";
mysql_query($sql2, $db);
?>