<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="knifefinder.css" />
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
			
				echo $list;
			
                $db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
                mysql_select_db('pb0612_knifefinder', $db);// select database
                
                
                $sql = "SELECT * FROM links ";
				
                $result = mysql_query($sql, $db);
				
                while($row = mysql_fetch_array($result))// Loops untill the end of the array
                {
						// prints result to screen  
						echo $row['id']." | ".$row['date']." | ".$row['name']." | ".$row['url']." | ".$row['logo']." | ".$row['about']. '<br/>';
                }
            ?>    
        </div>
    <?php
                include "php/site_info.php";
    ?>
</div>
</body>
</html>