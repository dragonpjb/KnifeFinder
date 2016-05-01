<?php session_start();
$knife = $_GET['knife'];
$knife = "'".$knife."'";

//echo "$knife = ".$knife."<br/><br/><br/>";
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
			
			include "php/nav_sub_hm.php";
       
	   ?>
        
            <div id="content_main"><!---->
                <?php          
							
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
					mysql_select_db('pb0612_knifefinder', $db);// select database
									
					$sql = "SELECT * FROM knives WHERE knife_id = $knife";
					
					$result = mysql_query($sql, $db);
					
					$row = mysql_fetch_array($result);
					
					
					echo 	"<h1 class='profile'>".$row['name']."</h1>".
							
							"<p id='pictBox'><img src='".$row['picture']."' width='350'/></p>".
							
						 	//"<ul class='profile'>".
							
							//"<li class='profile'>Brand: ".$row['brand']."</li>".
							
							//"<li class='profile'>Maker: ".$row['maker']."</li></ul>".
							
							"<p id='desc'>".$row[description]."</p>";
							
							
							
							
					$product_id = $row['product_id'];
					echo '<div id="add_to_cart">
						<p id="price">Price: $'.$row['price'].'</p>		
						
						<form action="cart.php" method="get">
							<p>
								<label for="q">Quantity: </label>
								<input name="q" id="q" type="text" /> 
								<input name="submit" id="submit" type="submit"  value="Add to Cart" />
							</p>
							<p>
								<input name="id" id="id" type="hidden" value="'.$row['product_id'].'"/> 
								<input name="page" id="page" type="hidden" value="product_profile_page.php?product='.$p_id.'"/>
								<input name="image" id="image" type="hidden" value="'.$row['picture'].'"/>
							</p>
							
						</form>
					</div><!--closes add_to_cart-->';
					//echo "<p><a href='cart.php?id=$product_id&q=1' title='add to shoping cart'>Add to Shopping Cart</a></p>";
         		?>       

            </div><!--closes content_main-->
                
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
