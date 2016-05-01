<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<script type="text/javascript">
	function changeAbout(x,y)
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

			requester.open("GET","about_change.php?id="+y+"&q="+x.value+"&ele="+x.name,true);
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
					
					$sql = "SELECT * FROM about_posts ";
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
						// prints result to screen  
						echo 	'about_id ='.$row["about_id"].'<br/><br/>'.
									'date = '.$row["date"].'<br/>'.
									'<p><form>title = <input type="text" name="title"  id="title1" value="'.$row["title"].'" onkeyup="changeAbout(this,'.$row["about_id"].')"/></form>'.'</p>'.
									'<p><form>subject = <input type="text" name="subject"  id="subject1" value="'.$row["subject"].'" onkeyup="changeAbout(this,'.$row["about_id"].')"/></form>'.'</p>'.
								
							  	  	'<p><form>body = <textarea name="body" id="body1" onkeyup="changeAbout(this,'.$row["about_id"].')" cols="20" rows="10" >'.$row["about"].'</textarea></form>'.'</p>'.
								
									'------------------------------<br/><br/>';
					}
           	 ?>
             
           <form action="add_product.php" method="get">
                <p>
                    <label for="title">Title: </label>
                    <input name="title" id="title" type="text" /> 
                </p>
                
                <p>
                    <label for="subject">Subject: </label>
                    <input name="subjecte" id="subject" type="text" /> 
                </p>

                <p>
                    <label for="body">Body: </label>
                    <textarea name="body" id="body" cols="20" rows="10"></textarea>
                </p>

				 <p>
                    <input name="submit" id="submit" type="submit"  value="Add Iteam" />
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
