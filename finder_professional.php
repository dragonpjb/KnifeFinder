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
			
			include "php/nav_sub_hm.php";
		?>	
		<div id="content_main" class="finder">
			<h1>What Profession are you looking for?</h1>	  
			<ul>
				<li>
					<h2><a href="finder_professional_gard.php" title ="gardening">Gardening</a></h2>
					<p>Gardening kinves are used for pruning, grafting, and general cutting tasks. The durability is the primary concern for these knives.
					</p>
				</li>
				
				<li>
					<h2><a href="finder_professional_military.php" title ="military">Military</a></h2>
					<p>
					military knives are designed for use by soldiers in combat situations. They need to be strong, and handel a large range of cutting tasks.
					</p>
				</li>
				
				<!--<li>
					<h2><a href="finder_professional_police.php" title ="police">Police</a></h2>
					<p>
						These knives are designed to help poliece and res
					</p>
				</li>-->
				
				<li>
					<h2><a href="finder_professional_rescue.php" title ="rescue">Rescue</a></h2>
					<p>
						These knives are designed to help emergency workers pull people out of bad situations. They need to be able to cut through clothes, seatbelts, and shoes easily. They also need to break glass and pry things open with out breaking.
					</p>
				</li>               
			</ul>
		</div>
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
