<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<script type="text/javascript">
	function changeHelp(x,y)
	{
		
		try
		{
			var requester = new XMLHttpRequest();
		}
		catch (error)
		{
			try
			{
				var requester = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (error)
			{
				var requester = null;
			}
		}
		if (requester == null) {
			alert("You are not using an ajax enabled client");
		}
		else
		{
			requester.onreadystatechange = function()
			{
				if(requester.readyState == 4)
				{
					if(requester.status == 200 || requester.status == 304)
					{
						var resp = requester.responseText;
						//alert(resp);
						//x = document.getElementsByTagName("p")[1];
						//x.firstChild.nodeValue = resp;
					}
					else
					{
						alert("failure");
					}
				}
			}
/*			alert("quantity = "+x.value);
			alert("id = "+x.id);
*/			//alert(x.parentNode.parentNode.id+x.value):

			requester.open("GET","help_change.php?id="+y+"&q="+x.value+"&ele="+x.id,true);
			//requester.open("GET","cart_change.php",true);
			requester.send(null);			
		}/**/
	}	
	
</script>

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
				
				$sql = "SELECT * FROM help_tickets ";
				
				$result = mysql_query($sql, $db);
				
				while($row = mysql_fetch_array($result))// Loops untill the end of the array
				{
					// prints result to screen  
					echo 	"help_id = ".$row['help_id']."<br/><br/>".
							"time = ".$row['time']."<br/>".
							'<p><form>name = <input type="text" name="name"  id="name" value="'.$row["name"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							'<p><form>email = <input type="text" name="email"  id="email" value="'.$row["email"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							'<p><form>subject = <input type="text" name="subject"  id="subject" value="'.$row["subject"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							'<p><form>problem = <input type="text" name="problem"  id="problem" value="'.$row["problem"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							'<p><form>status = <input type="text" name="status"  id="status" value="'.$row["status"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							'<p><form>comments = <input type="text" name="comments"  id="comments" value="'.$row["comments"].'" onkeyup="changeHelp(this,'.$row["help_id"].')"/></form>'.'</p>'.
							"------------------------------<br/><br/>";
				}
            ?>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
