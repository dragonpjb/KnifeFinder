<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_hm.php";
       
	   ?>
        
            <div id="content_main"><!---->
            
                <p><a href="mod_about.php">Manage About Posts</a></p>
                
                <p><a href="mod_articles.php">Manage Articles</a></p>
                
                <p><a href="mod_brands.php">Manage Brands</a></p>
                
                <p><a href="mod_blade_types.php">Manage Blade Types</a></p>
                
                <p><a href="mod_categorys.php">Manage Categorys</a></p>
                
                <p><a href="mod_definitions.php">Manage Definitions</a></p>
                
                <p><a href="mod_designers.php">Manage Designers</a></p>
                
                <p><a href="mod_features.php">Manage Featured Items</a></p>
                
                <p><a href="mod_help_tickets.php">Manage Help Tickets</a></p>
                
                <p><a href="mod_knives.php">Manage Knives</a></p>
                
                <p><a href="mod_links.php">Manage Links</a></p>
                
                <p><a href="mod_lock_types.php">Manage Lock Types</a></p>
                
                <p><a href="mod_makers.php">Manage Makers</a></p>
                
                <p><a href="mod_new_products.php">Manage New Products</a></p>
                
                <p><a href="mod_pictures.php">Manage Pictures</a></p>
                
                <p><a href="mod_products.php">Manage Products</a></p>
                
                <p><a href="mod_product_relations.php">Manage Product Relations</a></p>
                
                <p><a href="mod_reviews.php">Manage Reviews</a></p>
                
                <p><a href="mod_sales.php">Manage Sales</a></p>
                
                <p><a href="mod_specials.php">Manage Specials</a></p>
                
                <p><a href="mod_steels.php">Manage Steels</a></p>
                
                <p><a href="mod_styles.php">Manage Styles</a></p>
                
                <p><a href="mod_suppliers.php">Manage Suppliers</a></p>
                
                <p><a href="mod_users.php">Manage Users</a></p>
                
                <p><a href="mod_videos.php">Manage Videos</a></p>
            
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body></html>