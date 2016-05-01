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
			<h1>What type of activity wil you be doing?</h1>	  
			<ul>
				<li>
					<h2><a href="finder_fixed_folding.php?cat=hunting" title ="hunting">Hunting</a></h2>
					<p>
						A hunting knife is used primarily for camp chores and skinning game. It should be sturdy, easy to transport, and have a curved tip for skinning.
					</p>
				</li>
				<li>
					<h2><a href="finder_fixed_folding.php?cat=camping" title ="camping">Camping</a></h2>
					<p>
						Camping knives are used for camp chores like cutting fire wood, pounding tent stakes, and cutting foods. They are general purpose utility knives so they should be strong and easy to carry.
					</p>
				</li>
				<li>
					<h2><a href="finder_fixed_folding.php?cat=gardening" title ="gardening">Gardening</a></h2>
					<p>
					Gardening kinves are used for pruning, grafting, and general cutting tasks. The durability is the primary concern for these knives.
					</p>
				</li>
				<!--<li>
					<h2><a href="finder_fixed_folding.php?cat=survival" title ="survival">Survival</a></h2>
					<p>
					</p>
				</li>
				<li>
					<h2><a href="finder_fixed_folding.php?cat=fishing" title ="fishing">Fishing</a></h2>
					<p>
						Fishing d=knives are for scaling, gutting , and filleting fish. They should be corrosion resistent, and it help if they float because, you will eventually drop it in the water.
					</p>
				</li>-->
			</ul>
		</div>
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
