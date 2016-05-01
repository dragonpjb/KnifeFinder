<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/site_map.css" />
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
        
            <div id="content_main" class=""><!---->
            
            	<h1>Site Map</h1>
                
            	<div id="left_list">
                	<h2><a href="index.php" title="home" class=" site_map">Home</a></h2>
                    <h2><a href="about.php" title="about" class=" site_map">About</a></h2>
                    <h2><a href="news.php" title="news" class=" site_map">News</a></h2>
                    <h2><a href="phpBB3" title="forum" class=" site_map">Forum</a></h2>
                   
				   <ul>
                    	<!--<li class="site_map"><a href="#" class="small_link">Site Info</a></li>-->
                        <li class="site_map"><a href="phpBB3/viewforum.php?f=3" class="small_link">Help</a></li>
                        <li class="site_map"><a href="phpBB3/viewforum.php?f=4" class="small_link">General Discussion</a></li>
                    </ul>
                   
				   <h2><a href="knives.php" title="knives" class="site_map">Knives</a></h2>
                    
					<ul class="site_map">
                    	<li class="site_map"><a href="knives_sort.php?sort_by=brand" class="small_link">Sort by Brand</a></li>
                        <li class="site_map"><a href="knives_sort.php?sort_by=category" class="small_link">Sort by Category</a></li>
                        <li class="site_map"><a href="knives_sort.php?sort_by=purpose" class="small_link">Sort by Purpose</a></li>
                        <li class="site_map"><a href="knives_sort.php?sort_by=maker" class="small_link">Sort by Maker</a></li>
                        <li class="site_map"><a href="knives_sort.php?sort_by=designer" class="small_link">Sort by Designer</a></li>
                        <li class="site_map"><a href="knives_sort.php?sort_by=name" class="small_link">Sort by Name</a></li>
                    </ul>
                   
				   <h2><a href="accessories.php" title="accessories" class="site_map">Accessories</a></h2>
                   
				   <ul class="site_map">
                    	<li class="site_map"><a href="accessories_sort.php?category=stones" class="small_link">Stones</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=strops" class="small_link">Strops</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=storage" class="small_link">Storage</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=cutting_surfaces" class="small_link">Cutting Surfaces</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=polishing" class="small_link">Polishing</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=sheaths" class="small_link">Sheaths</a></li>
                        <li class="site_map"><a href="accessories_sort.php?category=odds" class="small_link">Odds and Ends</a></li>
                    </ul>
                </div>
                
                <div id="right_list">
                    <h2><a href="encyclopedia.php" title="knife encyclopedia" class="site_map">Knife Encyclopedia</a></h2>
					
                    <ul class="site_map">
                        <li class="site_map"><a href="glossary_sort.php" class="small_link">Glossary</a></li>
                        <li class="site_map"><a href="knife_anatomy.php" class="small_link">Anatomy of a Knife</a></li>
                        <li class="site_map"><a href="steel_sort.php" class="small_link">Steel Guide</a></li>
                        <li class="site_map"><a href="handle_sort.php" class="small_link">Handle Materials</a></li>
                        <!--<li class="site_map"><a href="#" class="small_link">Video</a></li>
                        <li class="site_map"><a href="#" class="small_link">Articles</a></li>-->
                    </ul>
					
                    <h2><a href="finder.php" title="knife finder" class="site_map">Find a Knife</a></h2></li>
                    <h2><a href="suppliers_sort.php" title="suppliers" class="site_map">Suppliers</a></h2></li>
                    <h2><a href="link_sort.php" title="link" class="site_map">Links</a></h2></li>
                    <h2><a href="help.php" title="help" class="site_map">Help</a></h2></li>
					
                    <ul class="site_map">
                        <li class="site_map"><a href="faq.php" class="small_link">F.A.Q.</a></li>
                        <li class="site_map"><a href="phpBB3/viewforum.php?f=3" class="small_link">Help Forum</a></li>
                        <li class="site_map"><a href="contact_us.php" class="small_link">Contact Us</a></li>
                    </ul>
                    
                </div>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
