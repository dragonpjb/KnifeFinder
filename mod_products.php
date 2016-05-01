<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<script type="text/javascript">
	function changeProducts(x,y)
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

			requester.open("GET","product_change.php?id="+y+"&q="+x.value+"&ele="+x.name,true);
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
					
					$sql = "SELECT * FROM products ";
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
						// prints result to screen  
						echo 	"product_id = ".$row['product_id']."<br/><br/>".
								"time = ".$row['time']."<br/>".
								'<p><form>name = <input type="text" name="name"  id="name1" value="'.$row["name"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
								'<p><form>picture = <input type="text" name="picture"  id="picture1" value="'.$row["picture"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
								'<p><form>price = <input type="text" name="price"  id="price1" value="'.$row["price"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
								'<p><form>brand = <input type="text" name="brand"  id="brand1" value="'.$row["brand"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
								'<p><form>supplier = <input type="text" name="supplier"  id="supplier1" value="'.$row["supplier"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
								'<p><form>category = <input type="text" name="category"  id="category1" value="'.$row["category"].'" onkeyup="changeProducts(this,'.$row["product_id"].')"/></form>'.'</p>'.
						'<p><form>about = <textarea name="about" id="about1" onkeyup="changeProducts(this,'.$row["product_id"].')" cols="20" rows="10" >'.$row["about"].'</textarea></form>'.'</p>'.
								"------------------------------<br/><br/>";
					}
           	 ?>
             
           <form action="add_product.php" method="get">
                <p>
                    <label for="name">Name: </label>
                    <input name="name" id="name" type="text" /> 
                </p>
                
                <p>
                    <label for="picture">picture: </label>
                    <input name="picture" id="picture" type="text" /> 
                </p>

                <p>
                    <label for="price">price: </label>
                    <input name="price" id="price" type="text" /> 
                </p>

                <p>
                    <label for="brand">brand: </label>
                    <input name="brand" id="brand" type="text" /> 
                </p>

                <p>
                    <label for="supplier">supplier: </label>
                    <input name="supplier" id="supplier" type="text" /> 
                </p>

                <p>
                    <label for="category">category: </label>
                    <input name="category" id="category" type="text" /> 
                </p>

                <p>
                    <label for="about">about: </label>
                    <textarea name="about" id="about" cols="20" rows="10"></textarea>
                </p>

				 <p>
                    <input name="submit" id="submit" type="submit"  value="Add Iteam" />
                    <input name="reset" id="reset" type="reset" value="Opps" />
                </p>
            </form>

            </div><!--closes content_main-->
        
            <div id="content_sup"><!--holds the welcome message and featured product-->    
            </div><!--closes content_sup_hm-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
