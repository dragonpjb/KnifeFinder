<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<style type="text/css">
.faq
	{
		
	}
	
.faq h1
	{
		
	}	
	
.faq h2
	{
		
	}
	
.faq h3
	{
		
	}
	
.faq p
	{
		
	}
	
.faq ul
	{
		
	}
	
.faq li
	{
		
	}
		
.faq img
	{
		
	}

	
.faq
	{
		
	}

	
.faq
	{
		
	}

	
.faq
	{
		
	}

</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_help.php";
       
	   ?>
        
            <div id="content_main" class="faq"><!---->
            
            	<h1>Frequently Asked Questions</h1>
                
				<?php
				
                	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
					mysql_select_db('pb0612_knifefinder', $db);// select database
														
					$sql = "SELECT * FROM faq_list ORDER BY question";
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
											
					echo	"faq_id = ".$row['faq_id']."<br/>".
					
						 	"date = ".$row['date']."<br/>".
					
						 	"question = ".$row['question']."<br/>".
							
							"answer = ".$row['answer']."<br/>".
							
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
