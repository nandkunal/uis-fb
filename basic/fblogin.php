<?php session_start();
//include('../db.php');
require 'lib/facebook.php';
require 'lib/fbconfig.php';

// Connection...
$user = $facebook->getUser();
if ($user)
 {
 $logoutUrl = $facebook->getLogoutUrl();
 try {
 $userdata = $facebook->api('/me');
 } catch (FacebookApiException $e) {
error_log($e);
$user = null;
 }
$_SESSION['facebook']=$_SESSION;
$_SESSION['userdata'] = $userdata;
$_SESSION['logout'] =  $logoutUrl;
header("Location: home.php");
}
else
{ 
$loginUrl = $facebook->getLoginUrl(array( 'scope' => 'email,user_birthday'));
echo '<a href="'.$loginUrl.'"><img src="facebook.png" title="Login with Facebook" /></a>';
 }
 ?>
