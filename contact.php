<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Email Was Sent!</title>
</head>

<body>

<?php
$to = "patrick@dragonpjb.com";
$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = wordwrap($_POST['message'], 70);

$headers = "From: $from";
$res = mail($to,$subject,$message,$headers);
if($res)
{
	echo "<p>Mail Sent.</p>";
}
else
{
	echo "<p>You are a failure.</p>";
}
//header('location:contact_us.php');
?> 

</body>
</html>