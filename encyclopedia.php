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
			
			include "php/nav_sub_encyc.php";
		?>	
		<div id="content_main" class="encyc">
    		<div id="content_left_encyc">  
          		<ul>       
             		<li>
                  		<h2><a href="glossary_sort.php" tabindex="0" title="glossary of knife terms">Glossary</a></h2>
                  		<p>If you do not understand a word or a term come here. This list of terms and definitions will explain it.</p>
              		</li>
              
              		<li>
                  		<h2><a href="steel_sort.php" tabindex="1" title="guide to different kinds of steel">Steel Guide</a></h2>
                  		<p>
    					If you have questions about a particular type of steel or want help understanding what the difference is come here. This list of steel types and uses will make everything clear.
                  		</p>
              		</li>
              
              	<!--<li>
                  	<h2><a href="#" tabindex="2" title=" watch videos">Video</a></h2>
                  	<p>If you want to see videos of knifes in action come here. Videos on everything from use tests to knife sharpening.</p>
              		</li>-->  
          		</ul><!---->
      		</div><!--content_left_help-->
  
      		<div id="content_right_encyc">
          		<ul>
              		<li>
                  		<h2><a href="knife_anatomy.php" tabindex="3" title="illustration of the parts of a knife">Anatomy of a Knife</a></h2>
                  		<p>If you have questions about the different parts of a knife come here. This illustration explains the different parts of a knife.</p>
              		</li>
              
              		<li>
                  		<h2><a href="handle_sort.php" tabindex="4" title="list of different handle materials">Handle Materials</a></h2>
                  		<p>Their are an almost endless number of different handle materials. This is a list of different handle materials and what makes them special.</p>
              		</li>
              
              	<!--<li>
                  		<h2><a href="#" tabindex="5" title="read articles">Library</a></h2>
                  		<p>
                  		This is our library of articles on knives and knife related topics. Everything from personal stories to legal decisions regarding the use and ownership of knives.
                  		</p>
					</li>--> 
          		</ul>  
    		</div><!--content_right_help-->	
		</div><!--content_main--> 
       	<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>
