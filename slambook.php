
<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
require('../configuration.php' );

$errors = array();
error_reporting(0);


if(isset($_POST['login'])){
	$fullname = preg_replace('/[^A-Za-z]/', '', $_POST['fullname']);
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname =$_POST['lastname'];
	$nickname =$_POST['nickname'];
	$fathername =$_POST['fathername'];
	$mothername =$_POST['mothername'];
	$bsname =$_POST['bsname'];
	$bestfriendname =$_POST['bestfriendname'];
	$firstchildhoodfriendname =$_POST['firstchildhoodfriendname'];
	$howdidyouknowme =$_POST['howdidyouknowme'];
	$doornumber =$_POST['doornumber'];
	$landmark =$_POST['landmark'];
	$townname =$_POST['townname'];
	$distict =$_POST['distict'];
	$state =$_POST['state'];
	$country =$_POST['country'];
	$postalcode =$_POST['postalcode'];
	$googleearthcoordinates =$_POST['googleearthcoordinates'];
	$emailid =$_POST['emailid'];
	$website =$_POST['website'];
	$skype =$_POST['skype'];
	$linkedin =$_POST['linkedin'];
	$twitter =$_POST['twitter'];
	$googleplus =$_POST['googleplus'];
	$facebook =$_POST['facebook'];
	$eskimi =$_POST['eskimi'];
	$otherid =$_POST['otherid'];
	$mobilenumber =$_POST['mobilenumber'];
	$landlinenumber =$_POST['landlinenumber'];
	$voipnumber =$_POST['voipnumber'];
	$dateofbirth =$_POST['dateofbirth'];
	$zodiacsign =$_POST['zodiacsign'];
	$gender =$_POST['gender'];
	$favcolor =$_POST['favcolor'];
	$favdress =$_POST['favdress'];
	$favmusic =$_POST['favmusic'];
	$favgame =$_POST['favgame'];
	$favdish =$_POST['favdish'];
	$favbook =$_POST['favbook'];
	$favactor =$_POST['favactor'];
	$favsportsperson =$_POST['favsportsperson'];
	$moreinterestabout =$_POST['moreinterestabout'];
	$thingsyoulikemostly =$_POST['thingsyoulikemostly'];
	$funniestmoment =$_POST['funniestmoment'];
	$dislikedish =$_POST['dislikedish'];
	$dislikethingst =$_POST['dislikethingst'];
	$crazyaboutthings =$_POST['crazyaboutthings'];
	$anyotherdislikes =$_POST['anyotherdislikes'];
	$whatyoulikeonme =$_POST['whatyoulikeonme'];
	$whatyoudislikeonme =$_POST['whatyoudislikeonme'];
	$mostremembermomentwithme =$_POST['mostremembermomentwithme'];
	$suggestionstome =$_POST['suggestionstome'];
	$undesirablemonentbyme =$_POST['undesirablemonentbyme'];
	$firstmeetwithme =$_POST['firstmeetwithme'];
	$lifeambition =$_POST['lifeambition'];
	$inspiredby =$_POST['inspiredby'];
	$yourrolemodel =$_POST['yourrolemodel'];
	$aboutyou =$_POST['aboutyou'];

	
}

	if(file_exists('slambook/' . $fullname . '.xml'))
		{
		$errors[] = 'Slambook already exists by that name';
		}
	if($fullname == '')
		{
		$errors[] = 'Full name is blank';
		}

	if($doornumber == '')
		{
		$errors[] = 'Door number is blank';
		}
	if($landmark == '')
		{
		$errors[] = 'Land mark is blank';
		}
	if($townname == '')
		{
		$errors[] = 'Town name is blank';
		}
	if($distict == '')
		{
		$errors[] = 'Distict name is blank';
		}
	if($state == '')
		{
		$errors[] = 'State is blank';
		}
	if($country == '')
		{
		$errors[] = 'Country name is blank';
		}
	if($postalcode == '')
		{
		$errors[] = 'Postal code is blank';
		}
	if($mobilenumber == '')
		{
		$errors[] = 'Mobile number is blank';
		}
	if($dateofbirth == '')
		{
		$errors[] = 'Date of birth is blank';
		}
	if($gender == '')
		{
		$errors[] = 'Gender is not selected';
		}
	if($aboutyou == '')
		{
		$errors[] = 'About you is blank';
		}
	


	if(count($errors) == 0){
		$xml = new SimpleXMLElement('<slambook></slambook>');
		$xml->addChild('fullname', $fullname);
		$xml->addchild('firstname',$firstname);
		$xml->addchild('middlename',$middlename);
		$xml->addchild('lastname',$lastname);
		$xml->addchild('nickname',$nickname);
		$xml->addchild('fathername',$fathername);
		$xml->addchild('mothername',$mothername);
		$xml->addchild('bsname',$bsname);
		$xml->addchild('bestfriendname',$bestfriendname);
		$xml->addchild('firstchildhoodfriendname',$firstchildhoodfriendname);
		$xml->addchild('howdidyouknowme',$howdidyouknowme);
		$xml->addchild('doornumber',$doornumber);
		$xml->addchild('landmark',$landmark);
		$xml->addchild('townname',$townname);
		$xml->addchild('distict',$distict);
		$xml->addchild('state',$state);
		$xml->addchild('country',$country);
		$xml->addchild('postalcode',$postalcode);
		$xml->addchild('googleearthcoordinates',$googleearthcoordinates);
		$xml->addchild('emailid',$emailid);
		$xml->addchild('website',$website);
		$xml->addchild('skype',$skype);
		$xml->addchild('linkedin',$linkedin);
		$xml->addchild('twitter',$twitter);
		$xml->addchild('googleplus',$googleplus);
		$xml->addchild('facebook',$facebook);
		$xml->addchild('eskimi',$eskimi);
		$xml->addchild('otherid',$otherid);
		$xml->addchild('mobilenumber',$mobilenumber);
		$xml->addchild('landlinenumber',$landlinenumber);
		$xml->addchild('voipnumber',$voipnumber);
		$xml->addchild('dateofbirth',$dateofbirth);
		$xml->addchild('zodiacsign',$zodiacsign);
		$xml->addchild('gender',$gender);
		$xml->addchild('favcolor',$favcolor);
		$xml->addchild('favdress',$favdress);
		$xml->addchild('favmusic',$favmusic);
		$xml->addchild('favgame',$favgame);
		$xml->addchild('favdish',$favdish);
		$xml->addchild('favbook',$favbook);
		$xml->addchild('favactor',$favactor);
		$xml->addchild('favsportsperson',$favsportsperson);
		$xml->addchild('moreinterestabout',$moreinterestabout);
		$xml->addchild('thingsyoulikemostly',$thingsyoulikemostly);
		$xml->addchild('funniestmoment',$funniestmoment);
		$xml->addchild('dislikedish',$dislikedish);
		$xml->addchild('dislikethingst',$dislikethingst);
		$xml->addchild('crazyaboutthings',$crazyaboutthings);
		$xml->addchild('anyotherdislikes',$anyotherdislikes);
		$xml->addchild('whatyoulikeonme',$whatyoulikeonme);
		$xml->addchild('whatyoudislikeonme',$whatyoudislikeonme);
		$xml->addchild('mostremembermomentwithme',$mostremembermomentwithme);
		$xml->addchild('suggestionstome',$suggestionstome);
		$xml->addchild('undesirablemonentbyme',$undesirablemonentbyme);
		$xml->addchild('firstmeetwithme',$firstmeetwithme);
		$xml->addchild('lifeambition',$lifeambition);
		$xml->addchild('inspiredby',$inspiredby);
		$xml->addchild('yourrolemodel',$yourrolemodel);
		$xml->addchild('aboutyou',$aboutyou);
	
		
		$xml->asXML('slambook/' . $fullname . '.xml');
		
		$db = "$database";
 $link = mysql_connect("$host", "$database_username", "$database_password");
 mysql_select_db($db, $link);
  mysql_query ("INSERT INTO slambook(fullname,firstname,middlename,lastname,nickname,fathername,mothername,bsname,bestfriendname,firstchildhoodfriendname,howdidyouknowme,doornumber,landmark,townname,distict,state,country,postalcode,googleearthcoordinates,emailid,website,skype,linkedin,twitter,googleplus,facebook,eskimi,otherid,mobilenumber,landlinenumber,voipnumber,dateofbirth,zodiacsign,gender,favcolor,favdress,favmusic,favgame,favdish,favbook,favactor,favsportsperson,moreinterestabout,thingsyoulikemostly,funniestmoment,dislikedish,dislikethingst,crazyaboutthings,anyotherdislikes,whatyoulikeonme,whatyoudislikeonme,mostremembermomentwithme,suggestionstome,undesirablemonentbyme,firstmeetwithme,lifeambition,inspiredby,yourrolemodel,aboutyou) VALUES ('$fullname','$firstname','$middlename','$lastname','$nickname','$fathername','$mothername','$bsname','$bestfriendname','$firstchildhoodfriendname','$howdidyouknowme','$doornumber','$landmark','$townname','$distict','$state','$country','$postalcode','$googleearthcoordinates','$emailid','$website','$skype','$linkedin','$twitter','$googleplus','$facebook','$eskimi','$otherid','$mobilenumber','$landlinenumber','$voipnumber','$dateofbirth','$zodiacsign','$gender','$favcolor','$favdress','$favmusic','$favgame','$favdish','$favbook','$favactor','$favsportsperson','$moreinterestabout','$thingsyoulikemostly','$funniestmoment','$dislikedish','$dislikethingst','$crazyaboutthings','$anyotherdislikes','$whatyoulikeonme','$whatyoudislikeonme','$mostremembermomentwithme','$suggestionstome','$undesirablemonentbyme','$firstmeetwithme','$lifeambition','$inspiredby','$yourrolemodel','$aboutyou')");
  mysql_close();
  print mysql_error();

		echo'slambook is sucessfully generated.';
		echo mysql_error();

		 
		header('Location: index.php');
		die;

	}
	
	/*
	
	
	-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2014 at 03:23 PM
-- Server version: 5.6.12
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `database2`
--

-- --------------------------------------------------------

--
-- Table structure for table `slambook`
--

CREATE TABLE IF NOT EXISTS `slambook` (
  `fullname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `bsname` varchar(50) NOT NULL,
  `bestfriendname` varchar(50) NOT NULL,
  `firstchildhoodfriendname` varchar(50) NOT NULL,
  `howdidyouknowme` varchar(50) NOT NULL,
  `doornumber` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `townname` varchar(50) NOT NULL,
  `distict` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `googleearthcoordinates` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `googleplus` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `eskimi` varchar(50) NOT NULL,
  `otherid` varchar(50) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `landlinenumber` varchar(50) NOT NULL,
  `voipnumber` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `zodiacsign` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `favcolor` varchar(50) NOT NULL,
  `favdress` varchar(50) NOT NULL,
  `favmusic` varchar(50) NOT NULL,
  `favgame` varchar(50) NOT NULL,
  `favdish` varchar(50) NOT NULL,
  `favbook` varchar(50) NOT NULL,
  `favactor` varchar(50) NOT NULL,
  `favsportsperson` varchar(50) NOT NULL,
  `moreinterestabout` varchar(50) NOT NULL,
  `thingsyoulikemostly` varchar(50) NOT NULL,
  `funniestmoment` varchar(50) NOT NULL,
  `dislikedish` varchar(50) NOT NULL,
  `dislikethingst` varchar(50) NOT NULL,
  `crazyaboutthings` varchar(50) NOT NULL,
  `anyotherdislikes` varchar(50) NOT NULL,
  `whatyoulikeonme` varchar(50) NOT NULL,
  `whatyoudislikeonme` varchar(50) NOT NULL,
  `mostremembermomentwithme` varchar(50) NOT NULL,
  `suggestionstome` varchar(50) NOT NULL,
  `undesirablemonentbyme` varchar(50) NOT NULL,
  `firstmeetwithme` varchar(50) NOT NULL,
  `lifeambition` varchar(50) NOT NULL,
  `inspiredby` varchar(50) NOT NULL,
  `yourrolemodel` varchar(50) NOT NULL,
  `aboutyou` varchar(250) NOT NULL,
  PRIMARY KEY (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slambook`
--

INSERT INTO `slambook` (`fullname`, `firstname`, `middlename`, `lastname`, `nickname`, `fathername`, `mothername`, `bsname`, `bestfriendname`, `firstchildhoodfriendname`, `howdidyouknowme`, `doornumber`, `landmark`, `townname`, `distict`, `state`, `country`, `postalcode`, `googleearthcoordinates`, `emailid`, `website`, `skype`, `linkedin`, `twitter`, `googleplus`, `facebook`, `eskimi`, `otherid`, `mobilenumber`, `landlinenumber`, `voipnumber`, `dateofbirth`, `zodiacsign`, `gender`, `favcolor`, `favdress`, `favmusic`, `favgame`, `favdish`, `favbook`, `favactor`, `favsportsperson`, `moreinterestabout`, `thingsyoulikemostly`, `funniestmoment`, `dislikedish`, `dislikethingst`, `crazyaboutthings`, `anyotherdislikes`, `whatyoulikeonme`, `whatyoudislikeonme`, `mostremembermomentwithme`, `suggestionstome`, `undesirablemonentbyme`, `firstmeetwithme`, `lifeambition`, `inspiredby`, `yourrolemodel`, `aboutyou`) VALUES
('a', 'sadak', '', 'pramodh', '', '', '', '', '', '', '', '2', '', '22', '', '22', '22', '22', '', '222', '', '', '', '', '', '222', '', '', '222', '', '', '2014-01-03', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2222About me'),
('madurusadakpramodhnaidu', 'sadak', '-', 'pramodh', 'pramodh', 'seshaiah', 'sujatha', 'simeon prasanth', 'sadak', '-', 'self', '5-102', '-', 'kothapalli', 'chittoor', 'andhra pradesh', 'india', '517507', '-', 'sadakpramodh@live.com', 'www.sadakpramodh.tumblr.com', 'sadakpramodh', 'sadakpramodh', 'sadakpramodh', 'sadakpramodh', 'sadakpramodhindia', 'sadak', '-', '+919296656962', '-', 'sadakpramodh', '1993-10-06', '-', 'Male', '-', '-', '-', '-', '-', '-', '-', '-', '--', '-', '-', '--', '-', '-', '', '-', '-', '-', '-', '-', '--', '-', '-', '-', 'sadak pramodh is good boy.'),
('sadak', 'sadak', '', '', '', '', '', '', '', '', '', '5-102@6', '', 'sada', '', 'sada', 'sada', 'sada', '', 'sadakpramodh@live.com', '', '', '', '', '', 'sadakpramodhindia111.11_1', '', '', '5555555555', '', '', '2014-01-01', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'About me'),
('simeonprasanth', '', '', '', '', '', '', '', '', '', '', '5-102', '-', 'kothapalli', 'chittoor', 'andhra pradesh', 'india', '517507', '', 'sadakpramodh@live.com', '', '', '', '', '', '', '', '', '+919296656962', '', '', '2014-01-01', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'About me');



	
	
	*/

	?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Slam book</TITLE>     
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META name="GENERATOR" content="MSHTML 10.00.9200.16384">

<link href="slambook.css" rel="stylesheet" type="text/css" />
</HEAD>     
<BODY>
<DIV id="header"><IMG style="margin: 5px 0px 0px 5px;" alt="sadakpramodh" 
src="sadakpramodh.jpg">         </DIV>
<H1><center>
Slam book 
</center></H1>
<DIV class="container">
<DIV class="account_management">Slambook management is handled by 
<A href="<?php echo "$your_website_link" ?>" target="_blank"><?php echo "$administrator_name" ?></A>.      
           
<UL>
  <LI>Cookies must be enabled beyond this point.</LI>
  <LI>Please enter all fields in the form.</LI>
    <LI><font color="red">* fields must be entered in the form.</font></LI>
  <LI>If you have no answer that column put hyphen(-) on particular column.</LI>
 <?php
		if(count($errors) > 0){
			
			foreach($errors as $e){
				echo "<li><font color='red'>  $e . </li></font>";
			}
			
		}
		?></UL></DIV>

<FORM action="" method="post">
<DIV>
  <p><BR>
    <strong>Name Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>First Name:</label><input type="text" name="firstname"/></td>
      <td><label>Middle Name:</label><input type="text" name="middlename"/></td>
      <td><label>Last Name:</label><input type="text" name="lastname"/></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Full Name:</label><input type="text" name="fullname"/></td>
      <td><label>Nick Name:</label><input type="text" name="nickname"/></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <hr />
  <p><BR>
    <strong>Friends &amp; Family Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>Father Name:</label><input type="text" name="fathername" /></td>
      <td><label>Mother Name:</label><input type="text" name="mothername" /></td>
      <td><label>Brother / Sister Name:</label><input type="text" name="bsname" /></td>
    </tr>
    <tr>
      <td><label>Best Friend Name:</label><input type="text" name="bestfriendname" /></td>
      <td><label>First Childhood Friend Name:</label><input type="text" name="firstchildhoodfriendname" /></td>
      <td><label>How do you know me?:</label><input type="text" name="howdidyouknowme" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Postal Address Column</strong>
  </p>

  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Door / House Number:</label><input type="text" name="doornumber" /></td>
      <td><label><font color='red'>*</font>Land Mark:</label><input type="text" name="landmark" /></td>
      <td><label><font color='red'>*</font>City / Town / Village Name:</label><input type="text" name="townname" /></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>District:</label><input type="text" name="distict" /></td>
      <td><label><font color='red'>*</font>State:</label><input type="text" name="state" /></td>
      <td><label><font color='red'>*</font>Country:</label><input type="text" name="country" /></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Postal / Zip Code:</label><input type="text" name="postalcode" /></td>
      <td><label>Earth Coordinates(Longitude,Latitude):</label><input type="text" name="googleearthcoordinates" /></td>
      <td></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Email Id:</label><input type="text" name="emailid" /></td>
      <td><label>Website:</label><input type="text" name="website" /></td>
      <td><label>Skype Id:</label><input type="text" name="skype" /></td>
    </tr>
    <tr>
      <td><label>Linked In:</label><input type="text" name="linkedin" /></td>
      <td><label>Twitter:</label><input type="text" name="twitter" /></td>
      <td><label>Google+:</label><input type="text" name="googleplus" /></td>
    </tr>
    <tr>
      <td><label>Facebook:</label><input type="text" name="facebook" /></td>
      <td><label>Eskimi:</label><input type="text" name="eskimi" /></td>
      <td><label>Other Id</label><input type="text" name="otherid" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Mobile Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Mobile Number:<br />(with country code)</label><input type="text" name="mobilenumber" /></td>
      <td><label>Land Line Number:<br />(with country code)</label><input type="text" name="landlinenumber" /></td>
      <td><label>VOIP Number:</label><input type="text" name="voipnumber" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Personal Information Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td width="31%"><label><font color='red'>*</font>Date Of Birth:</label><input type="date" name="dateofbirth" /></td>
      <td width="31%"><label>Zodiac / Astro Sign:</label><input type="text" name="zodiacsign" /></td>
      <td width="31%"><label><font color='red'>*</font>Gender:</label><input type="radio" name="gender" value="Male" class ="gender"/>Male<input type="radio" name="gender" value="Female" class="gender" />Female</td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Likes and Dislikes Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>Favourite Color:</label><input type="text" name="favcolor"></td>
      <td><label>Favourite Dress:</label><input type="text" name="favdress"></td>
      <td><label>Favourite Music:</label><input type="text" name="favmusic"></td>
    </tr>
    <tr>
      <td><label>Favourite Game:</label><input type="text" name="favgame"></td>
      <td><label>Favourite Dish:</label><input type="text" name="favdish"></td>
      <td><label>Favourite Book:</label><input type="text" name="favbook"></td>
    </tr>
    <tr>
      <td><label>Favourite Actor:</label><input type="text" name="favactor"></td>
      <td><label>Favourite Sports Person:</label><input type="text" name="favsportsperson"></td>
      <td><label>More Interest About:</label><input type="text" name="moreinterestabout"></td>
    </tr>
    <tr>
      <td><label>Things you like mostly:</label><input type="text" name="thingsyoulikemostly"></td>
      <td><label>Funniest moment in your life:</label><input type="text" name="funniestmoment"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Dislike dish:</label><input type="text" name="dislikedish"></td>
      <td><label>Dislike things:</label><input type="text" name="dislikethingst"></td>
      <td><label>Crazy about things like:</label><input type="text" name="crazyaboutthings"></td>
    </tr>
    <tr>
      <td><label>Any other dislike:</label><input type="text" name="anyotherdislikes"></td>
      <td></td>
      <td></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>On sadak pramodh Column</strong>
  </p>
  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>What you like on me:</label><input type="text" name="whatyoulikeonme" /></td>
      <td><label>What you dislike on me:</label><input type="text" name="whatyoudislikeonme" /></td>
      <td><label>Most remember moment with me:</label><input type="text" name="mostremembermomentwithme" /></td>
    </tr>
    <tr>
      <td><label>Suggestions to me:</label><input type="text" name="suggestionstome" /></td>
      <td><label>Most undesirable moment by me:</label><input type="text" name="undesirablemonentbyme" /></td>
      <td><label>First meet with me:</label><input type="text" name="firstmeetwithme" /></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Goals and Inspirations Column</strong>
  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label>Life ambition:</label><input type="text" name="lifeambition" /></td>
      <td><label>Inspired by:</label><input type="text" name="inspiredby" /></td>
      <td><label>Your role model:</label><input type="text" name="yourrolemodel" /></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>About You Column</strong>
  </p>
   <table width="94%" height="108" border="0">
    <tr>
      <td><label><font color='red'>*</font>About Your Self:</label>
        <textarea name="aboutyou" >About me</textarea></td>
     </tr>
     </table>
  <p>&nbsp;</p>
<div><input type="submit" class="submit" value="submit" name="login" /></div>
</DIV></FORM></DIV>
<hr />
<center>
  <p><strong><em>&copy;sadakpramodh-<?php echo "$year" ?></em></strong></p>
  <p><strong>slambook version <?php echo "$version" ?></strong></p>
  <p><em>All rights reserved on <?php echo "$rights_name" ?></em></p>
</center></BODY></HTML>
