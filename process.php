<?php
session_start();
//require 'src/db.php';
require 'src/facebook.php';
require 'src/fbconfig.php';
$facebook=$_SESSION['facebook'];
$userdata=$_SESSION['userdata'];
$userphotos=$_SESSION['userphotos'];
$logoutUrl=$_SESSION['logout'];
$access_token_title='fb_'.$facebook_appid.'_access_token';
$access_token=$facebook[$access_token_title];

//print_r($_SESSION['userdata']);
$photoData=$userphotos['data'];
//for($i=0;i<sizeof($photoData);$i++){
	
	//print_r($photoData[$i]);
	//echo "-------------------------------------<br/><br/><br/>";
//}

$arr=$photoData[1];
//print_r($arr['source']);

?>
<img src="<?php echo $arr['source'];?>" />

<table height="auto" align="center" cellpadding="2" cellspacing="2">
<thead>
<tr>
<th colspan="2"></th>
</tr>
</thead>
<tbody>
<form method="post" action="validateTags.php">
<tr>
<td colspan="2" align="center">Identify the faces in the image(Enter names separated by comma):</td>
</tr>
<tr>
<td colspan="2" align="center"><textarea cols="40" rows="5" name="tags"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="authenticate"/></td>
</tr>

</form>
</tbody>
</table>

