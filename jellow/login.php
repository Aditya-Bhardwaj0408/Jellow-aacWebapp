<?php
include ('../config.php');

$inactive = 36000; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

session_start(); // Starting Session

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive) && isset($_SESSION['login_user'])) {
//if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {	
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session


$error=''; // Variable To Store Error Message
if (isset($_POST['cname'])) {
if (empty($_POST['cname']) || empty($_POST['carenumber'])) {
$error = "Enter Login credentials!";
}
else
{
$cname=$_POST['cname'];
$cnumber=$_POST['carenumber'];


$lan;

/*

foreach ($_POST['Color'] as $select)
{
//echo "You have selected :" .$select; // Displaying Selected Value
$lan=$select;
echo $lan;


}
*/

$cname = stripslashes($cname);
$cnumber = stripslashes($cnumber);
$cname = mysql_real_escape_string($cname);
$cnumber = mysql_real_escape_string($cnumber);

$query = mysql_query("select * from users where name='$cname' AND care_contact='$cnumber'", $con);

if ($query) {

$rows = mysql_num_rows($query);
$rows1 = mysql_fetch_array($query);
if ($rows >= 1)
	//$_SESSION['login_user']=$cnumber;
	$_SESSION['login_user']=$rows1['id'];
else 
	$error = "Username or Password is invalid!";
} 
else {
	$error = "Username or Password is invalid!";	
}
mysql_close($con); // Closing Connection
}
}
else{
	//$_SESSION['login_user']="";
}
?>