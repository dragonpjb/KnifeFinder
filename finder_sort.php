<?php session_start();
$sort = $_GET['sort'];
$sort = "'".$sort."'";
$cat = $_GET['cat'];
$cat = "'".$cat."'";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/knives_sort.css" />
</head>

<body>
	<div id="container">
		<?php
            include "php/branding.php";
                
            include "php/nav_main.php";
                    
            include "php/nav_sub_hm.php";
            
        ?>
        <div id="content_main">
            <?php
                $db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
                mysql_select_db('pb0612_knifefinder', $db);// select database
                
                
                $sql = "SELECT * FROM catagorys WHERE catagory = $cat";
				
                $result = mysql_query($sql, $db);
				
                while($row = mysql_fetch_array($result))// Loops untill the end of the array
                {
					$id = $row['knife_id'];
										
					$sql_2 = "SELECT * FROM knives WHERE knife_id = $id AND style = $sort";
					
					$result_2 = mysql_query($sql_2, $db);
					
					$row_2 = mysql_fetch_array($result_2);
					
					$knife_id = $row_2['knife_id'];
					
					//echo $knife_id."<br/><br/>";
					
					if($row_2)
					{
						echo "<div class='prod_listing'><a href='knife_profile_page.php?knife=$knife_id' class='prod_listing'>";

						echo "<h3 class='prod_listing'>".$row_2['name']."</h3>";
					
						echo "<p class='prod_listing'><img src=".$row_2['picture']." alt='picture of knife' class='prod_listing'/></p>";
						
						//echo "<p class='prod_listing'>".$row_2['description']."</p>";
						
						echo "</a></div>";
						/*echo "<div class='prod_listing'>"."<br/>";

						echo "<img src=".$row_2['picture']." width='200' alt='picture of knife' class='prod_listing'/>"."<br/>";
												
						echo "<h3 class='prod_listing'><a href='knife_profile_page.php?knife=$knife_id' class='prod_listing'>".$row_2['name']."</a></h3>"."<br/>";
						
						echo "<p>".$row_2['description']."</p>"."<br/>";
						
						echo "</div>".'<br/>';*/
					}
                                 	       
                }
            ?>    
        </div>
    <?php
                include "php/site_info.php";
    ?>
</div>
</body>
</html>