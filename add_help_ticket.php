<?php
	$name = $_GET['name'];
	$name = "'".$name."'";
	
	$email = $_GET['email'];
	$email = "'".$email."'";
	
	$subject = $_GET['subject'];
	$subject = "'".$subject."'";
	
	$problem = $_GET['text'];
	$problem = "'".$problem."'";
	
	//connect to server					
	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
	
	// select database
	mysql_select_db('pb0612_knifefinder', $db);
	
	//set sql query			
	$sql = "INSERT INTO help_tickets(name ,email, subject, problem) VALUES($name,$email,$subject,$problem)";

	//send query 
	mysql_query($sql, $db);

	header('location:help_tickets.php');
?>