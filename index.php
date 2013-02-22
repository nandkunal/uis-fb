<?php
session_start();
require 'src/facebook.php';
require 'src/fbconfig.php';


$user = $facebook->getUser();

if ($user)
{
$logoutUrl = $facebook->getLogoutUrl();
try
{
$userdata = $facebook->api('/me/photos');
//$friends = $facebook->api('/me/friends');
//$friendsData = $friends['data'];
//for ($i = 0; $i < sizeof($friendsData); $i++)
//{
//    $friend = $friendsData[$i];
//    echo $friend['name'] . ", ";
//} 
}
catch (FacebookApiException $e) {
error_log($e);
$user = null;
}
$_SESSION['facebook']=$_SESSION;
$_SESSION['userdata'] = $userdata;
//print_r($userdata);
$_SESSION['logout'] = $logoutUrl;
//Redirecting to home.php
header("Location: home.php");
}
else
{
	$params = array(
	    
	    "scope" => "email,read_stream,publish_stream,user_photos,user_videos"
		//"redirect_uri"=>REDIRECT_URI
		);

$loginUrl=$facebook->getLoginUrl($params);
echo '<a href="'.$loginUrl.'">Login with Facebook</a>';
}
?>