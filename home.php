<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<h1>Welcome </h1>
<div><a href="<?php echo $_SESSION['logout']; ?>">Logout</a></div>
<?php $userdata=$_SESSION['userdata']; 
//print_r($_SESSION['userdata']);
$photoData=$userdata['data'];
//for($i=0;i<sizeof($photoData);$i++){
	
	//print_r($photoData[$i]);
	//echo "-------------------------------------<br/><br/><br/>";
//}

$arr=$photoData[2];
//print_r($arr['source']);

?>
<img src="<?php echo $arr['source'];?>" />

<br/>
Please identify all the faces in the above images<br/>
<input type="text" name="ima"/><br/>
<input type="submit" name="submit" value="submit" />
</body>
</html>