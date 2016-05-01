<?php session_start();
$sort = $_GET['sort_by'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/knives_sort.css" />
<style type="text/css">
	
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_knives.php";
       
	   ?>
        
            <div id="content_main"><!---->
				<?php
				
					//connect to server
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
					
        			// select database
					mysql_select_db('pb0612_knifefinder', $db);
														
					switch ($sort)
					{
						case category:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM catagorys JOIN knives ON catagorys.knife_id=knives.knife_id ORDER BY catagorys.catagory";
							//echo "category";
						  	break;
						case brand:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM knives ORDER BY brand ";
						  	//echo "brand";
						 	break;
						case purpose:
							$sort = "'".$sort."'";						
							$sql = "SELECT * FROM knives ORDER BY purpose";
						  	//echo "purpose";
						  	break;
						case maker:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM knives ORDER BY maker ";
						  	//echo "maker";
						 	break;
						case designer:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM knives ORDER BY designer ";
						  	//echo "designer";
						 	break;
						case name:
							$sort = "'".$sort."'";
							$sql = "SELECT * FROM knives ORDER BY name ";
						  	//echo "name";
						 	break;
						default:
							$sql = "";
						  	echo "default";
					}   
					
					$result = mysql_query($sql, $db);
					
					// Loops untill the end of the array
					while($row = mysql_fetch_array($result))
					{
						$knife_id = $row['knife_id'];

						echo "<div class='prod_listing'><a href='knife_profile_page.php?knife=$knife_id' class='prod_listing'>";

						echo "<h3 class='prod_listing'>".$row['name']."</h3>";
					
						echo "<p class='prod_listing'><img src=".$row['picture']." alt='picture of knife' class='prod_listing'/></p>";
						
						//echo "<p class='prod_listing'>".$row['description']."</p>";
						
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
