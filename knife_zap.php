 <?php 
	$id = $_GET['id'];
	$list = $_GET['list'];
	echo $id;
	echo $list;
	//connect to server					
	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
	
	// select database
	mysql_select_db('pb0612_knifefinder', $db);
	
	//set sql query			
	$sql = "DELETE * FROM $list WHERE knife_id=$id";
	echo $sql;
	//send query 
	mysql_query($sql, $db);
	
	$sql = "DELETE * FROM products WHERE knife_id=$id";
	
	mysql_query($sql, $db);
	//header('location:cart.php');
?>

</body>
</html>