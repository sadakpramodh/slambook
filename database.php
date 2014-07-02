<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>database</title>
</head>

<body>
<?php
	$firstname = "sadak";
	$lastname = "pramodh";
	
 $db = "database2";
 $link = mysql_connect("localhost", "root", "");
 mysql_select_db($db, $link);
  mysql_query ("INSERT INTO table2 (firstname,lastname) values ('$firstname', '$lastname')");
  mysql_close();
  print mysql_error();

?>
</body>
</html>
