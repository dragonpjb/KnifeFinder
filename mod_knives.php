<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<script type="text/javascript">
	function changeKnives(x,y)
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
			
			requester.open("GET","knives_change.php?id="+y+"&q="+x.value+"&ele="+x.name,true);
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
    	
		<?php
                    
            $db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
            mysql_select_db('pb0612_knifefinder', $db);// select database
            
            $sql = "SELECT * FROM knives ";
            
            $result = mysql_query($sql, $db);
            
            while($row = mysql_fetch_array($result))// Loops untill the end of the array
            {
					$x=$row["knife_id"];
					echo "x = ".$x.'<br/>';
                // prints result to screen  
                echo 'knife_id = '.$row["knife_id"].'<br/>'.
				
						'date = '.$row["date"].'<br/>'.
						
						'<p><form>product_id = <input type="text" name="product_id = "  id="product_id1" value="'.$row["product_id"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>name = <input type="text" name="name"  id="name" value="'.$row["name"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>picture = <input type="text" name="picture"  id="picture1" value="'.$row["picture"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>price = <input type="text" name="price"  id="price1" value="'.$row["price"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>brand = <input type="text" name="brand"  id="brand1" value="'.$row["brand"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
                        
						'<p><form>maker = <input type="text" name="maker"  id="maker1" value="'.$row["maker"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>designer = <input type="text" name="designer"  id="designer1" value="'.$row["designer"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>origin = <input type="text" name="origin"  id="origin1" value="'.$row["origin"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>style = <input type="text" name="style"  id="style1" value="'.$row["style"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>purpose = <input type="text" name="purpose"  id="purpose1" value="'.$row["purpose"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>description = <textarea name="description" id="description1" onkeyup="changeKnives(this,'.$row["knife_id"].')" cols="20" rows="10" >'.$row["description"].'</textarea></form>'.'</p>'.
                        
						'<p><form>steel = <input type="text" name="steel"  id="steel1" value="'.$row["steel"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>handle = <input type="text" name="handle"  id="handle1" value="'.$row["handle"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
                        
						'<p><form>liners = <input type="text" name="liners"  id="liners1" value="'.$row["liners"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>knife_lock = <input type="text" name="knife_lock"  id="knife_lock1" value="'.$row["knife_lock"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>hardware = <input type="text" name="hardware"  id="hardware1" value="'.$row["hardware"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>cross_guard = <input type="text" name="cross_guard"  id="cross_guard1" value="'.$row["cross_guard"].'" onkeyup="changeKnives(this,'.$row["knife_id"].'))"/></form>'.'</p>'.
						
						'<p><form>pommel = <input type="text" name="pommel"  id="pommel1" value="'.$row["pommel"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>clip = <input type="text" name="clip"  id="clip1" value="'.$row["clip"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>len_open = <input type="text" name="len_open"  id="len_open1" value="'.$row["len_open"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>len_closed = <input type="text" name="len_closed"  id="len_closed1" value="'.$row["len_closed"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>len_blade = <input type="text" name="len_blade"  id="len_blade1" value="'.$row["len_blade"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>len_handle = <input type="text" name="len_handle"  id="len_handle1" value="'.$row["len_handle"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
                        
						'<p><form>weight = <input type="text" name="weight"  id="weight1" value="'.$row["weight"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>hardness = <input type="text" name="hardness"  id="hardness1" value="'.$row["hardness"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>pins = <input type="text" name="pins"  id="pins1" value="'.$row["pins"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>rivets = <input type="text" name="rivets"  id="rivets1" value="'.$row["rivets"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>sheath = <input type="text" name="sheath"  id="sheath1" value="'.$row["sheath"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
						
						'<p><form>tang = <input type="text" name="tang"  id="tang1" value="'.$row["tang"].'" onkeyup="changeKnives(this,'.$row["knife_id"].')"/></form>'.'</p>'.
                        '<p><a href="knife_zap.php?list=knives&id='.$x.'">Delete</a><br/>'.
						 // '<p><a href="zap.php?id='.$row["id"].'">Delete</a></p>'
                        "------------------------------<br/><br/>";
            }//closes while loop
        ?> 
                 
            <form action="add_knife.php" method="get">
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
                    <label for="maker">maker: </label>
                    <input name="maker" id="maker" type="text" /> 
                </p>
                
                <p>
                    <label for="designer">designer: </label>
                    <input name="designer" id="designer" type="text" /> 
                </p>
                
                <p>
                    <label for="origin">origin: </label>
                    <input name="origin" id="origin" type="text" /> 
                </p>
                
                <p>
                    <label for="style">style: </label>
                    <input name="style" id="style" type="text" /> 
                </p>
                
                <p>
                    <label for="purpose">purpose: </label>
                    <input name="purpose" id="purpose" type="text" /> 
                </p>
                
                <p>
                    <label for="description">description: </label>
                    <textarea name="description" id="description" cols="20" rows="10"></textarea>
                </p>
                
                <p>
                    <label for="steel">steel: </label>
                    <input name="steel" id="steel" type="text" /> 
                </p>
                
                <p>
                    <label for="handle">handle: </label>
                    <input name="handle" id="handle" type="text" /> 
                </p>
                
                <p>
                    <label for="liners">liners: </label>
                    <input name="liners" id="liners" type="text" /> 
                </p>
                
                <p>
                    <label for="knife_lock">knife_lock: </label>
                    <input name="knife_lock" id="knife_lock" type="text" /> 
                </p>
                
                <p>
                    <label for="hardware">hardware: </label>
                    <input name="hardware" id="hardware" type="text" /> 
                </p>
                
                <p>
                    <label for="cross_guard">cross_guard: </label>
                    <input name="cross_guard" id="cross_guard" type="text" /> 
                </p>
                
                <p>
                    <label for="pommel">pommel: </label>
                    <input name="pommel" id="pommel" type="text" /> 
                </p>
                
                <p>
                    <label for="clip">clip: </label>
                    <input name="clip" id="clip" type="text" /> 
                </p>
                
                <p>
                    <label for="bolsters">bolsters: </label>
                    <input name="bolsters" id="bolsters" type="text" /> 
                </p>
                
                <p>
                    <label for="len_open">len_open: </label>
                    <input name="len_open" id="len_open" type="text" /> 
                </p>
                
                <p>
                    <label for="len_closed">len_closed: </label>
                    <input name="len_closed" id="len_closed" type="text" /> 
                </p>
                
                <p>
                    <label for="len_blade">len_blade: </label>
                    <input name="len_blade" id="len_blade" type="text" /> 
                </p>
                
                <p>
                    <label for="len_handle">len_handle: </label>
                    <input name="len_handle" id="len_handle" type="text" /> 
                </p>
                
                <p>
                    <label for="weight">weight: </label>
                    <input name="weight" id="weight" type="text" /> 
                </p>
                
                <p>
                    <label for="hardness">hardness: </label>
                    <input name="hardness" id="hardness" type="text" /> 
                </p>
                
                <p>
                    <label for="pins">pins: </label>
                    <input name="pins" id="pins" type="text" /> 
                </p>
                
                <p>
                    <label for="rivets">rivets: </label>
                    <input name="rivets" id="rivets" type="text" /> 
                </p>
                
                <p>
                    <label for="sheath">sheath: </label>
                    <input name="sheath" id="sheath" type="text" /> 
                </p>
                
                <p>
                    <label for="tang">tang: </label>
                    <input name="tang" id="tang" type="text" /> 
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
