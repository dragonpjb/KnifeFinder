<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>

<body>
<?php
//echo $_GET['id'];
//echo '<br/>';
//echo $_GET['q'];

$id = $_GET['id'];
$q = $_GET['q'];

If($id != "" && $q != "")
{
	$added = 0;
	
	for($i = 0 ; $i< count($_SESSION['cart']); $i++)
	{
		if($_SESSION['cart'][$i][0] == $id)
		{
			$_SESSION['cart'][$i][1] += $q;
			$added = 1;
		}
	}
	
	If( $added == 0)
	{
		$_SESSION['cart'][] = array($id,$q);
	}
}

foreach($_SESSION['cart'] as $row)
{
	
	echo '<p>' . $row[0] . '|'  . $row[1]. '</p>';
	
}

?>
</body>
</html>