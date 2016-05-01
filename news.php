<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder - News</title>
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
        
            <div id="content_main" class=" about"><!---->
				     
                     <h1>Knife Finder News</h1>
                            
				<?php
					
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
		
					mysql_select_db('pb0612_knifefinder', $db);// select database
														
					$sql = "SELECT * FROM news_posts ORDER BY time";
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
											
					echo		"<h2> ".$row['title']. "</h2>".
									"<p> ".$row['content']."</p>".
									"<br/><br/>";
					}

				?>

            
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
