<?php
session_start();
include "../configuration.php";
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
$error = false;
if(isset($_POST['change'])){
	$old = md5($_POST['o_password']);
	$new = md5($_POST['n_password']);
	$c_new = md5($_POST['c_n_password']);
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
	if($old == $xml->password){
		if($new == $c_new){
			$xml->password = $new;
			$xml->asXML('users/' . $_SESSION['username'] . '.xml');
			header('Location: logout.php');
			die;
		}
	}
	$error = true;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0037)http://127.0.0.1:8887/users/login.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Change password</TITLE> 
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">
 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384">
<link href="default_1.css" rel="stylesheet" type="text/css" />
</HEAD> 
<BODY>
<DIV id="header"><IMG class="XtGem logo" style="margin: 5px 0px 0px 5px;" alt="" 
src="sadakpramodh.jpg">         </DIV>
<DIV class="container">
<DIV class="account_management">                Account management is handled by 
<A href="<?php echo "$your_website_link";?>" target="_blank"><?php echo "$administrator_name";?></A>.      
           
<UL>
  <LI>Cookies must be enabled beyond this point.</LI>
 
       <?php 
		if($error){
			echo "<li><font color='red'>Some of the passwords do not match</font></li>";
		}
		?>
        </ul>
        </div>
        <h3>Change Password:</h3>

	<form method="post" action="">
		<div>

        <label>Old password:</label>
		<center><input type="password" name="o_password" class='holo'/></center><br />
		<label>New password:</label>
       <center> <input type="password" name="n_password" class='holo'/></center><br />
		<label>Confirm New password:</label>
       <center> <input type="password" name="c_n_password" class='holo'/></center><br />
		<input type="submit" class="submit" name="change" value="Change Password" />
        </div>
        
	</form>
	<hr />
	<a href="index.php">User home</a>
</body>
</html>
