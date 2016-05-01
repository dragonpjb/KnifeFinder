<?php session_start();
$product = $_GET['product'];
$product = "'".$product."'";
$sort = $_GET['sort'];
$page = "accessories_sort.php?category=".$sort;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/profile_page.css" />
<style type="text/css">
	
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_accessories.php";
       
	   ?>
        
            <div id="content_main" class="cart"><!---->
            
                <?php          
					//connect to server					
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
					
        			// select database
					mysql_select_db('pb0612_knifefinder', $db);
					
					//set sql query			
					$sql = "SELECT * FROM products WHERE product_id = $product ";
					
					//send query 
					$result = mysql_query($sql, $db);
					
					//get table as array
					$row = mysql_fetch_array($result);
					
					$id = $row['product_id'];
					//$name = $row['name'];
					$p_id = $row['product_id'];
					
					echo "<h1 class='profile'>".$row['name']."</h1>".
						 
						 "<p id='pictBox'><img src='".$row['picture']."' width='300'/></p>".
						 
						 //"<ul class='profile'>".
						 
						 //"<li class='profile'>Price: $".$row['price']."</li>".
						 
						 //"<li class='profile'>Brand: ".$row['brand']."</li>".
						 
						 //"</ul>".
						 
						 "<p id='desc'>".$row['about']."</p>";
						 
					//echo  '<p><a href="'.$page.'">Return</a></p>';
					
					echo '<div id="add_to_cart">
						<p id="price">Price: $'.$row['price'].'</p>
						<form action="cart.php" method="get">
							<p>
								<label for="q">Quantity: </label>
								<input name="q" id="q" type="text" /> 
								<input name="submit" id="submit" type="submit"  value="Add to Cart" />
							</p>
							<p>
								<input name="id" id="id" type="hidden" value="'.$id.'"/> 
								<input name="page" id="page" type="hidden" value="product_profile_page.php?product='.$p_id.'"/>
								<input name="image" id="image" type="hidden" value="'.$row['picture'].'"/>
							</p>
							<p>
								
							</p>
						</form>
					</div><!--closes add_to_cart-->';
				?>

            </div><!--closes content_main-->
                
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
