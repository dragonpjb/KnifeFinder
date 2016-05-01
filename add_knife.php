<?php
$name = $_GET['name'];
$name = "'".$name."'";
echo $name;
$picture = $_GET['picture'];
$picture = "'".$picture."'";
echo $picture;
$price = $_GET['price'];
echo price;
$brand = $_GET['brand'];
$brand = "'".$brand."'";
echo $brand;
$maker = $_GET['maker'];
$maker = "'".$maker."'";
$maker;
$designer = $_GET['designer'];
$designer = "'".$designer."'";
echo $designer;
$origin = $_GET['origin'];
$origin = "'".$origin."'";
echo $origin;
$style = $_GET['style'];
$style = "'".$style."'";
echo $style;
$purpose = $_GET['purpose'];
$purpose = "'".$purpose."'";
echo $purpose;
$description = $_GET['description'];
$description = "'".$description."'";
echo $description;
$steel = $_GET['steel'];
$steel = "'".$steel."'";
echo $steel;
$handle = $_GET['handle'];
$handle = "'".$handle."'";
echo $handle;
$liners = $_GET['liners'];
$liners = "'".$liners."'";
echo $liners;
$knife_lock = $_GET['lock'];
$knife_lock = "'".$knife_lock."'";
echo $knife_lock;
$hardware = $_GET['hardware'];
$hardware = "'".$hardware."'";
echo $hardware;
$cross_guard = $_GET['cross_guard'];
$cross_guard = "'".$cross_guard."'";
echo $cross_guard;
$pommel = $_GET['pommel'];
$pommel = "'".$pommel."'";
echo $pommel;
$bolsters = $_GET['bolsters'];
$bolsters = "'".$bolsters."'";
echo $bolsters;
$len_open = $_GET['len_open'];
echo $len_open;
$len_closed = $_GET['len_closed'];
echo $len_closed;
$len_blade = $_GET['len_blade'];
echo $len_blade;
$len_handle = $_GET['len_handle'];
echo $len_handle;
$weight = $_GET['weight'];
echo $weight;
$hardness = $_GET['hardness'];
$hardness = "'".$hardness."'";
echo $hardness;
$pins = $_GET['pins'];
$pins = "'".$pins."'";
echo $pins;
$rivets = $_GET['rivets'];
$rivets = "'".$rivets."'";
echo $rivets;
$sheath = $_GET['sheath'];
$sheath = "'".$sheath."'";
echo $sheath;
$tang = $_GET['tang'];
$tang = "'".$tang."'";
echo $tang;
$about = $_GET['about'];
$about = "'".$about."'";
echo $about;
$category = $_GET['category'];
$category = "'".$category."'";
echo $category;

//connect to server					
$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');

// select database
mysql_select_db('pb0612_knifefinder', $db);

$sql = "INSERT INTO knives(name,picture,price,brand,maker,designer,origin,style,purpose,description,steel,handle,liners,knife_lock,hardware,cross_guard,pommel,bolsters,len_open,len_closed,len_blade,len_handle,weight,hardness,pins,rivets,sheath,tang)VALUES($name,$picture,$price,$brand,$maker,$designer,$origin,$style,$purpose,$description,$steel,$handle,$liners,$knife_lock,$hardware,$cross_guard,$pommel,$bolsters,$len_open,$len_closed,$len_blade,$len_handle,$weight,$hardness,$pins,$rivets,$sheath,$tang)";

//send query 
mysql_query($sql, $db);

$sql ="INSERT INTO products(name,picture,price,brand,supplier,category,about)VALUES($name,$picture,$price,$brand,$maker,$category,$description)";

mysql_query($sql, $db);

$sql = "SELECT product_id FROM products WHERE name=$name";

$result = mysql_query($sql, $db);
$x = mysql_fetch_array($result);
echo $x[product_id];
$sql = "UPDATE knives SET product_id=$x[product_id] WHERE name=$name";

//UPDATE knives SET product_id=16 WHERE name='test'

mysql_query($sql, $db);
/**/

header('location:mod_knives.php');

?>





