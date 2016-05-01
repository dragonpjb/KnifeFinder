<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/steel_guide.css" />
<style type="text/css">
	
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_encyc.php";
       
	   ?>
        
            <div id="content_main"><!---->
				<table id="steel_list" border='1'>
					<tr>
                        <th>Name</th>
                        <th>Carbon</th>
                        <th>Mn</th>
                        <th>Cr</th>
                        <th>Ni</th>
                        <th>V</th>
                        <th>Mo</th>
                        <th>W</th>
                        <th>Co</th>
                        <th>Hardness</th>
                        <th>Description</th>
                        <th>Uses</th>
				</tr>		
				<?php			
                	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
					mysql_select_db('pb0612_knifefinder', $db);// select database
					
					$sql = "SELECT * FROM steels ORDER BY name";//squ command
					
					$result = mysql_query($sql, $db);//send MySQL query

					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
						echo	
							"<tr>".
								"<td>".$row['name']."</td>".
								"<td>".$row['carbon']."</td>".
								"<td>".$row['Mn']."</td>".
								"<td>".$row['Cr']."</td>".
								"<td>".$row['Ni']."</td>".
								"<td>".$row['V']."</td>".
								"<td>".$row['Mo']."</td>".
								"<td>".$row['W']."</td>".
								"<td>".$row['Co']."</td>".
								"<td>".$row['hardness']."</td>".
								"<td>".$row['about']."</td>".
								"<td>".$row['uses']."</td>".
							"</tr>";
					}
                ?>
			</table>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
