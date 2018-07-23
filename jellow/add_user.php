<script>
function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);
	//form.setAttribute("target", "_blank");

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }	
	document.body.appendChild(form);
    form.submit();	
	}
</script>
<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
	//session_start();
	require('../config.php');
    
	if (isset($_POST['name'])){
        
		$email = $_POST['email'];
		$name=$_POST['name'];
		$cname=$_POST['cname'];
		$contact=$_POST['contact'];
		$bloodgroup=$_POST['bloodgroup'];
		$address=$_POST['address'];
		$usergroup=$_POST['usergroup'];
		
		if(isset($_POST['userid'])){
		$userkid = $_POST['userid'];			
        $query = "UPDATE `users` SET name='$name' ,care_name='$cname', care_contact='$contact', address='$address', care_email='$email', blood_group='$bloodgroup' , user_group='$usergroup', timestamp=now() WHERE id=$userkid";
		$result = mysql_query($query);
		$query23 = "UPDATE `web_feedback` SET child_name='$name' , care_email='$email' WHERE user_id=$userkid";
		$result22 = mysql_query($query23);
		mysql_close($con);
		echo "<script>window.location.href='index.php';</script>";
		}
		
		/**************************** check to see if user exists ************************************/
		else{
		
		
		//$query23 = mysql_query("select * from users where care_contact='$contact' AND care_email='$email'", $con);

		$query23 = "select * from users where care_contact='$contact' OR care_email='$email'";
		$result23 = mysql_query($query23);

		//if ($query23) {
		$rows = mysql_num_rows($result23);
		if ($rows >= 1)	{
		header("Location: index.php?same_usr=1");
		}
		//echo "<script>window.location.href='index.php?same_usr=1';</fscript>";
		//} 
		
		/**************************** check to see if user exists ************************************/
			
		else{	
		
		//echo $email." ".$name." ".$cname;
		
		$query = "INSERT INTO `users` (name,  care_name, care_contact, address, care_email, blood_group, user_group) VALUES ('$name', '$cname', '$contact', '$address', '$email', '$bloodgroup', '$usergroup')";
		$result = mysql_query($query);
		
		$query153 = mysql_query("select * from users ORDER BY id DESC LIMIT 1",$con);
		$row153 = mysql_fetch_array($query153);
		$newid = $row153['id'];
		
		$inactive = 7200; 
		ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

		session_start(); // Starting Session

		if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive) && isset($_SESSION['login_user'])) {		
	    //session_unset();     
	    //session_destroy();   
		}
		$_SESSION['testing'] = time(); // Update session
		$_SESSION['login_user']=$newid;
		}
		        
		mysql_close($con);
		        
		echo "<script>window.location.href='index.php';</script>";
		}
    }
	
	if (isset($_POST['comment'])){
		$comment=$_POST['comment'];
		$ratingu=$_POST['ratingu'];
		$ratingp=$_POST['ratingp'];
		$ratingv=$_POST['ratingv'];
		$ratingn=$_POST['ratingn'];
		$feedname=$_POST['feedname'];
		$feedemail=$_POST['feedemail'];
		$feedid=$_POST['feedid'];
		/*echo $comment."<br>";
		echo $rating;*/
		$query52 = mysql_query("select * from `web_feedback` where user_id='$feedid'", $con);
		if ($query52) {
		$rows52 = mysql_num_rows($query52);
		if ($rows52 >= 1)
		$query = "UPDATE `web_feedback` SET child_name='$feedname', feedback='$comment', rating_use='$ratingu', rating_pic='$ratingp', rating_voice='$ratingv', rating_nav='$ratingn', care_email='$feedemail', timestamp=now() WHERE user_id='$feedid'";
		else
		$query = "INSERT INTO `web_feedback` (feedback, rating_use, rating_pic, rating_voice, rating_nav, child_name, care_email, user_id) VALUES ('$comment', '$ratingu', '$ratingp', '$ratingv', '$ratingn', '$feedname', '$feedemail', '$feedid')";
		}
        $result = mysql_query($query);
		mysql_close($con);
		echo "<script>window.location.href='index.php';</script>";
	}
	
	if (isset($_POST['econtact'])){
		
		$econtact=$_POST['econtact'];
		
		$result1 = mysql_query("select * from `users` where care_contact=$econtact",$con);					
		$rows = mysql_num_rows($result1);
		if ($rows == 0) {
			//echo "Ha";
			echo "<script>window.location.href='index.php';openModal(7);</script>";	
			mysql_close($con);
		}
		else{						
		mysql_close($con);		
		echo "<script>window.location.href='index.html';</script>";
		//echo "Na";
		}
	}

?>