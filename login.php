<?php
require('../configuration.php' );
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
		if($password == $xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Login</TITLE> 
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">

 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384">
<link href="default_1.css" rel="stylesheet" type="text/css" />
</HEAD> 
<BODY>
<DIV id="header"><IMG class="XtGem logo" style="margin: 5px 0px 0px 5px;" alt="" 
src="sadakpramodh.jpg">         </DIV>

<DIV class="container">
<DIV class="account_management">                Account management is handled by 
<A href="<?php echo "$your_website_link";?>" target="_blank"><?php echo"$administrator_name";?></A>.      
           
<UL>
  <LI>Cookies must be enabled beyond this point.</LI>
  <?php
		if($error){
			echo '<li><font color="red">Invalid username and/or password.</font></li>';
		}
		?></UL></DIV>
<H3>Login</H3>
<FORM action="" method="post">
<!--LABEL>Username:</LABEL-->
<center><input name="username" type="text" size="20" placeholder="username" /></center>
<!--LABEL>Password:</LABEL--><br />
<br/>

<center><INPUT name="password" type="password" size="20" placeholder="password">		</center>				 
<P><INPUT name="login" class="submit" type="submit" value="Login"></P></FORM><A 
href="register.php">Register</A> 
</DIV>

</BODY></HTML>
