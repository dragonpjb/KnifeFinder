<?php session_start();
	$id = $_GET['id'];
	$id2 = "'".$id."'"; //for sql query
	$q = $_GET['q'];
	$q2 = "'".$q."'"; //for sql query
	$page = $_GET['page'];
	$page2 = "'".$page."'"; //for sql query
	$image = $_GET['image'];
	$image2 = "'".$image."'"; //for sql query
	
	if($id != 0 && $q != 0)
	{
		//connect to server					
		$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');
		
		// select database
		mysql_select_db('pb0612_knifefinder', $db);
		
		//set sql query			
		$sql = "SELECT * FROM products WHERE product_id = $id ";
		
		//send query 
		$result = mysql_query($sql, $db);
		
		//get table as array
		$row2 = mysql_fetch_array($result);
		echo $row2["name"];
		$name = mysql_real_escape_string($row2["name"]);
		
		$name2 = "'".$name."'"; //for sql query
		
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder - Cart</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/cart.css" />
<script type="text/javascript">
	function changeCart (x)
	{
		//alert("quantity = "+x.value);
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
						alert(resp);
						//x = document.getElementsByTagName("p")[1];
						//x.firstChild.nodeValue = resp;
					}
					else
					{
						alert("failure");
					}
				}
			}
			//var vars = "id="+x.id+"&value="+x.value;
			//alert(x.parentNode.parentNode.id);
			requester.open("GET","cart_change.php?id="+x.parentNode.parentNode.id+"&q="+x.value,true);
			//requester.open("GET","cart_change.php",true);
			requester.send(null);			
		}
	}/**/	
	
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
            
            	<h1>Shopping Cart</h1>
            	<?php
					
					if($id != "" && $q != "") //if id and q are not empty
					{
						$added = 0;
						
						//set sql query			
						$sql = "SELECT * FROM cart_list";
						
						//send query 
						$y = mysql_query($sql, $db);
						
						$i = 0 ; 
						
						while($x = mysql_fetch_array($y))
						{

							
							if($x[id] == $id)
							{
								//echo "if 2 <br/>";
								
								//connect to server					
								$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');
								
								// select database
								mysql_select_db('pb0612_knifefinder', $db);
								
								$sql2 = "UPDATE cart_list SET quantity=quantity+$q WHERE name=$name2 AND id=$id";
								mysql_query($sql2, $db);
								
								$added = 1;
							}
							$i++;
						}
						
						If( $added == 0)//if this iteam is new add to array
						{
							//echo "if 3 <br/>";
							
							//connect to server					
							$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');
							
							// select database
							mysql_select_db('pb0612_knifefinder', $db);
							
							//set sql query			
							$sql = "INSERT INTO cart_list(name,id,quantity,image)VALUES( $name2,$id,$q,$image2)";
							//echo  $sql;
							//send query 
							mysql_query($sql, $db);
							
						}
					}
					
					
				$db = mysql_connect( 'localhost', 'pb0612_admin', '562288');//connect to server
        
                mysql_select_db('pb0612_knifefinder', $db);// select database
                
                $sql = "SELECT * FROM cart_list ";
				
                $result2 = mysql_query($sql, $db);
				
                while($row = mysql_fetch_array($result2))// Loops untill the end of the array
                {
					
					//echo "print out <br/>";
						// prints result to screen  
						echo 	'<div id="'.$row["id"].'"class="item">'.
								'<p class="cart_pict"><img src="'.$row["image"].'" width="100"/></p>'.
								'<form>'.$row["name"].'   '.' = <input type="text" name="amount"  id="amount" value="'.$row["quantity"].'" onkeyup="changeCart(this)"/></form>';
						echo  	'<p class="zap"><a href="zap.php?id='.$row["id"].'">Delete</a></p></div>';			
									
								
                }

					
					//echo  '<p><a href="'.$page.'">Return</a></p>';
					echo  '<p id="clear"><a href="clear_cart.php">Clear Shopping Cart</a></p>';
				?>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
