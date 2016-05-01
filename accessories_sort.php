<?php session_start();
$sort = $_GET['category'];
$cat = $_GET['category'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/ass_sort.css" />
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
        
            <div id="content_main"><!---->
				<?php
							
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
					mysql_select_db('pb0612_knifefinder', $db);// select database
														
					switch ($sort)
					{
						case stones:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
							//echo "category";
						  	break;
						case storage:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "brand";
						 	break;
						case cutting_surfaces:
							$sort = "'".$sort."'";						
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "purpose";
						  	break;
						case sheath:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo $sql;
						 	break;
						case strops:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "designer";
						 	break;
						case oil:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "name";
						 	break;
						case polishing:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "name";
						 	break;
						case odds:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM products WHERE category = $sort ORDER BY name";
						  	//echo "name";
						 	break;						
						default:
							$sql = "";
						  	echo "default";
					}   
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
						
						$p_id = $row['product_id'];
						
						echo "<div class='prod_listing'>";

						echo "<a href='product_profile_page.php?product=$p_id&sort=$cat' class='prod_listing'><h3 class='prod_listing'>".$row['name']."</h3>";
						
						
						echo "<p class='prod_listing'><img src=".$row['picture']." alt='picture of product' class='prod_listing' /></p>";
												
						
						//echo "<p class='prod_listing'>".$row['about']."</p>";
						
						echo "</a></div>";

					}

				?>
            
            </div><!--closes content_main-->
                
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
