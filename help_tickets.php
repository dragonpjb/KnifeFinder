<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<style type="text/css">
		
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_help.php";
       
	   ?>
        
            <div id="content_main" class="help_ticket"><!---->
            	
                <h1>Help Tickets</h1>
                
            	<form method="get" action="add_help_ticket.php">
                
					<fieldset>
                    
						<legend>Your Contact Details</legend>
						<p>
							<label for="name">Name: </label>
							<input name="name" id="name" type="text" /> 
						</p>
                        <p>
							<label for="email">Email Address: </label>
							<input name="email" id="email" type="text"/>
						</p>

					</fieldset>
                    
					<fieldset id="comments">
                    
						<legend>Message</legend>
						<p>
							<label for="subject">Subject: </label>
							<input name="subject" id="subject" type="text"/>
						</p>
						<p>
							<label for="text">Message: </label>
							<textarea name="text" id="text" cols="20" rows="10">
							</textarea>
						</p>
                        
					</fieldset>
					<p>
						<input name="submit" id="submit" type="submit"  value="Submit" />
						<input name="reset" id="reset" type="reset" value="Opps" />
					</p>
				</form>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
