<?php
session_start();
//require 'lib/db.php';
require 'lib/facebook.php';
require 'lib/fbconfig.php';
$facebook=$_SESSION['facebook'];
$userdata=$_SESSION['userdata'];
$logoutUrl=$_SESSION['logout'];
$access_token_title='fb_'.$facebook_appid.'_access_token';
$access_token=$facebook[$access_token_title];


if(!empty($userdata))
{
echo '<h1>Login User Details</h1>';
echo '<img src="https://graph.facebook.com/'.$userdata['id'].'/picture">';
echo "<br/>";
echo '<b>Access Token: </b>'.$access_token;
echo "<br/>";
echo '<b>User ID: </b>'.$userdata['id'];
echo "<br/>";
echo  '<b>Name: </b>'.$userdata['name'];
echo "<br/>";
echo  '<b>First Name: </b>'.$userdata['first_name'];
echo "<br/>";
echo  '<b>Last Name: </b>'.$userdata['last_name'];
echo "<br/>";
echo  '<b>Email: </b>'.$userdata['email'];
echo "<br/>";
echo  '<b>Gender: </b>'.$userdata['gender'];
echo "<br/>";
echo  '<b>Birthday: </b>'.$userdata['birthday'];
echo "<br/>";
echo  '<b>Location: </b>'.$userdata['location']['name'];
echo "<br/>";
echo  '<b>Hometown: </b>'.$userdata['hometown']['name'];
echo "<br/>";
echo  '<b>Bio :</b>'.$userdata['bio'];
echo "<br/>";
echo  '<b>Relationship Status: </b>'.$userdata['relationship_status'];
echo "<br/>";
echo  '<b>Time Zone: </b>'.$userdata['timezone'];
echo "<br/>";
echo "<br/>";

$facebook_id=$userdata['id'];
$name=$userdata['name'];
$email=$userdata['email'];
$gender=$userdata['gender'];
$birthday=$userdata['birthday'];
$location=mysql_real_escape_string($userdata['location']['name']);
$hometown=mysql_real_escape_string($userdata['hometown']['name']);
$bio=mysql_real_escape_string($userdata['bio']);
$relationship=$userdata['relationship_status'];
$timezone=$userdata['timezone'];
echo "SQL Query: <span style='color:#cc0000'>INSERT INTO `users` (`facebook_id`, `name`, `email`, `gender`, `birthday`, `location`, `hometown`, `bio`, `relationship`, `timezone`, `access_token`) 
VALUES ('$facebook_id','$name','$email','$gender','$birthday','$location','$hometown','$bio','$relationship','$timezone','$access_token')</span>";

echo "<br/>";

 echo '<a href="'.$logoutUrl.'">Logout Facebook</a>';
 }
 else
 {
  header("Location: fblogin.php");
 }
 ?>

