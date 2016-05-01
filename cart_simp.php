<?php session_start();
	$id = $_GET['id'];
	$q = $_GET['q'];
	$page = $_GET['page'];
	
	if($id != 0 && $q != 0)
	{
		//connect to server					
		$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
		
		// select database
		mysql_select_db('pb0612_knifefinder', $db);
		
		//set sql query			
		$sql = "SELECT * FROM products WHERE product_id = $id ";
		
		//send query 
		$result = mysql_query($sql, $db);
		
		//get table as array
		$row2 = mysql_fetch_array($result);
		
		$name = $row2["name"];
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder - Cart</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<style type="text/css">
	
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_hm.php";
       
	   ?>
        
            <div id="content_main"><!---->
            
            	<h1>Shopping Cart</h1>
            	<?php
					
					if($id != "" && $q != "") //if id and q are not empty
					{
						$added = 0;
						
						for($i = 0 ; $i< count($_SESSION['cart']); $i++)
						{
							if($_SESSION['cart'][$i][1] == $id)
							{
								$_SESSION['cart'][$i][2] += $q;
								$added = 1;
							}
						}
						
						If( $added == 0)//if this iteam is new add to array
						{
							$_SESSION['cart'][] = array($name,$id,$q);
						}
					}
					
					foreach($_SESSION['cart'] as $row)
					{
						
						echo 	'<div class="">'.
									'<p>'.$row["0"].'   '.'Quantity = '.$row[2].'</p>'.
									'<form>
										<p>
										
										</p>
									</form>
								</div>';
						
					}
					
					echo  '<p><a href="'.$page.'">Return</a></p>';
					echo  '<p><a href="clear_cart.php">Clear Shopping Cart</a></p>';
				?>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
