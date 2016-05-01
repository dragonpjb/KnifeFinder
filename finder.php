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
			<h1>What type of Knife are you looking for?</h1>
			
			<ul>
				<li>
					<h2><a href="finder_sports.php" title ="sports">Sports</a></h2>
					<p>These are knives that are designed to be used in a particular sport like golf or hunting. They usually have specially shaped blades and extra attachments to make common tasks easier. A golfers knife would probable have a divot repair tool and a short blade for sharpening pencils.
					</p><!---->
				</li>
				<li>
					<h2><a href="finder_kitchen.php" title ="kitchen">Kitchen</a></h2>
					<p>These are knives designed for food prepration and use in the kitchen.</p><!---->
				</li>
				<li>
					<h2><a href="finder_professional.php" title ="professional">Professional</a></h2>
					<p>These are knives designed to help people in a specific profession.</p><!---->
				</li>
				<li>
					<h2><a href="finder_hobby.php" title ="hobby">Hobby</a></h2>
					<p>These knives are designed to be used for a particular hobby like model making.</p><!---->
				</li>
				<li>
					<h2><a href="finder_general.php" title ="every_day">Every Day</a></h2>
					<p>These knives are designed to be carried around and used for every day cutting tasks like cutting string or opening letters.</p><!---->
				</li>
				<li>
					<h2><a href="finder_tactical.php" title ="tactical">Tactical</a></h2>    
					<p>These knives are designed for fighting and self defense.</p><!--  -->
				</li> 
				<li>
					<h2><a href="finder_outdoor.php" title ="outdoor">Outdoor</a></h2>
					<p>These Knives are designed to be used for outdoor activities like camping.</p><!---->
				</li>
			</ul>
		</div>
		
        <?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
