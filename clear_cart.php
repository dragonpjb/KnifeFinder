<?php session_start();

	//connect to server					
	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
	
	// select database
	mysql_select_db('pb0612_knifefinder', $db);
	
	//set sql query			
	$sql = "DELETE FROM cart_list";
	
	//send query 
	mysql_query($sql, $db);


/*	session_destroy();*/
	header('location:index.php');
?>
