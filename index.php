<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_SESSION['username']; ?> home</title>
<link href="default_1.css" rel="stylesheet" type="text/css" />
</head>
<body>

        <div id="header">
            <div><img src="sadakpramodh.jpg" alt="sadakpramodh"  style="margin: 5px 0 0 5px" />
            </div>
            
</div>
        
        <table width="100%" border="0">
          <tr>
            <td width="77%"><h2>Welcome</h2></td>
            <td width="23%" class="usernamex">
              <h2><font color="#660099"><?php echo $_SESSION['username']; ?></font></h2>
            </td>
          </tr>
          <tr>
            <td ></td>
            <td class="usernamex"><?php
    
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
$imagename=$xml->photoname;


echo "<img src='$imagename' height='100' width='75' align='right'/>";

?>
</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="usernamex">
              <p><a href="changepassword.php" >Change Password</a>
                -
  <a href="logout.php">Logout</a></p>
              </p>
            </td>
          </tr>
        </table>

 
 		</h2>
  





<hr />

<center><h1><a href="slambook.php" target="new">Slam Book</a></h1></center>
<marquee>Site is under construction.It is live for testing purpose only.</marquee> 
<hr />
<table width="93%" border="0" align="center">
  <tr>
    <td width="31%"><?php
 
    if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
        echo "Your IP address is : $ipaddress";
    }
$country = getenv('GEOIP_COUNTRY_NAME');
   
   echo "<br>Your country : $country";

?></td>
    <td width="31%"><center>&copy sadakpramodh-2014</center></td>
    <td width="31%"><center>

<script language=javascript src="uptime.js"></script></center></td>
  </tr>
</table>



</body>
</html>
