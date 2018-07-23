<?php
include('login.php'); // Includes Login Script
include ('../config.php');
?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB"><head>
	<title></title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
	<script type="text/javascript"  src="scripts/functions.js"></script>
    <script type="text/javascript"  src="scripts/functions-leveltwo.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree1.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree2.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree5.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree5_part1.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree3.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree4.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree7.js"></script>
    <script type="text/javascript"  src="scripts/functions-levelthree8.js"></script>
    <script type="text/javascript"  src="scripts/sequence-activity.js"></script>
    <script type="text/javascript"  src="scripts/bootstrap.js"></script>
    <script type="text/javascript"  src="scripts/bootstrap.min.js"></script>    
	<script src="scripts/shortcut.js" type="text/javascript"></script>
    <script src="scripts/bodym.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--<link href="styles/bootstrap.css" rel="stylesheet" type="text/css">        -->

    <!--<script src="scripts/jquery-1.3.2.js" type="text/javascript"></script>
    <script src="scripts/jquery.helper.js" type="text/javascript"></script>
    <link href="styles/style.css" rel="stylesheet" type="text/css" /-->
    <script>
	var ghalclick=0;
	
	$(document).ready(function(){
    $(window).resize(function(){
    if(window.innerHeight > window.innerWidth){ 		
    var div = $('#row1');
	var div2 = $('#khalifoot');
    var width = div.width()-(div.width()*0.20);
	var width1 = div.width()    
    div.css('height', width);
	div2.css({"position":"fixed", "top": width});
	}
	else{	
	var div2 = $('#khalifoot');		
	div2.css({"position":"fixed", "top": "79%","margin-top":"0px"});	
	}
    });
	});
	
	
	
	$(document).click(function(evt) {
		
	if(window.innerHeight > window.innerWidth){ 		
    var div = $('#row1');
	var div2 = $('#khalifoot');
    var width = div.width()-(div.width()*0.20);    
    div.css('height', width);
	div2.css({"position":"fixed", "top": width});
	}
	else{	
	var div2 = $('#khalifoot');	
	div2.css({"position":"fixed", "top":"79%","margin-top":"0px"});
	//div2.css({"position":"fixed", "width":"100%", "bottom":"-32px", "background-image":"url(img/bg_low.png)","background-repeat": "no-repeat", "background-size":"100%", "z-index":"200", "padding":"2%"});	
	}
		
	if(evt.target.id != "hb" && $('#hb').hasClass('button-border'))
    $("#hb").removeClass('button-border');
	
	//if(evt.target.id != "keyb" && !$('#myModal').is(':visible') && evt.target.id != "keyb")
	if(evt.target.id != "keyb" && (evt.target.id == "myModal2" || !$('#myModal2').is(':visible')) && evt.target.id != "closekey" && (evt.target.id != "myModal2" || !$('#myModal2').is(':visible')))
          $("#keyb").removeClass('button-border');
	});
	
	function myFunction(){	
				var referrer = document.referrer;
                console.log(referrer);
                if (referrer == "http://localhost/jellow_email/web/add_user1.php") {
                    /*setTimeout(function() {
                        $('#modalWindow').modal('show');
                    }, 5000);*/
					openModal(9);
					$("#errortype10").show();
                }	
		$("#menu-bagha").hide();
		openModal(12);
		<?php 
		if(isset($_GET['same_usr']))
		$error53="User exists, please login!";
		else
		$error53="";		
		
		if(isset($_SESSION['login_user']) && $_SESSION['login_user']!=""){		
  		echo "closeModal(12);";
		$user_check=$_SESSION['login_user'];

		$ses_sql=mysql_query("select * from users where id='$user_check'", $con);
			$row = mysql_fetch_assoc($ses_sql);
			$uname = $row['name'];
			$childname = $row['name'];
			$uid =$row['id'];
			$carename =$row['care_name'];
			$carecontact =$row['care_contact'];
			
			$address = $row['address'];
			$careemail =$row['care_email'];
			$user_group = $row['user_group'];
			$bloodg = $row['blood_group'];		
		
		$ses_sql2=mysql_query("select * from web_feedback where user_id='$user_check'", $con);
			$row2 = mysql_fetch_assoc($ses_sql2);
			$fname = $row2['child_name'];
			$fid = $row2['user_id'];
			$frateuse = $row2['rating_use'];
			$fratepic = $row2['rating_pic'];
			$fratevoice = $row2['rating_voice'];
			$fratenav = $row2['rating_nav'];
			$ffeed = $row2['feedback'];
			$femail = $row2['care_email'];		
		}
		?>
							
		$("#errortype1").hide();
		$("#errortype2").hide();
		$("#errortype3").hide();
		$("#errortype4").hide();
		$("#errortype5").hide();
		$("#errortype7").hide();
		
		
		/*var cw = $('#row1').width();
		$('#row1').css({'height':cw+'px'});*/
	}
	
	
		
	$(function () {
    var body = $("body");

    var previousWidth = null;

    // Function that applies padding to the body
    // to adjust its position.
    /*var resizeBody = function () {
        var currentWidth = body.width();
        if (currentWidth != previousWidth) {
            previousWidth = currentWidth;

            // Measure the scrollbar size
            body.css("overflow", "hidden");
            var scrollBarWidth = body.width() - currentWidth;
            body.css("overflow", "auto");

            body.css("margin-left", scrollBarWidth + "px");
        }
    };*/

    // setInterval is required because the resize event
    // is not fired when a scrollbar appears or disappears.
    setInterval(resizeBody, 100);
    resizeBody();
});
	
	function dakhav(){
		$("#menu-bagha").toggle();
	}
	
	$(document).mouseup(function(e) 
	{
    var container = $("#menusathi");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $("#menu-bagha").hide();
    }
	});
	
	function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 3;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
	
	
	function formValidation()
{
var cname = document.myForm.cname;
var carename = document.myForm.carename;
var ucontact = document.myForm.care_contact;
var uadd = document.myForm.address;
var uemail = document.myForm.email;
var bloodg = document.myForm.bloodg;
var userg = document.myForm.user_group;
var ukid1 = document.myForm.ukid;

if(validcname(cname))
{
if(allLetter(carename))
{
//alert('Good Name is Required');	
if(alphanumeric(uadd))
{ 
if(validcontact(ucontact,10,10))
{
if(ValidateEmail(uemail))
{	
	
	//alert('Form Succesfully Submitted'); 
	<?php
	/*echo '$("#errortype1").show();
$("#errortype1").text(cname.value);
';

	$query = mysql_query("select * from users where name='". echo 'cname.value' ."$cname' AND care_contact='$cnumber'", $con);*/	
	?>
	
	<?php if(isset($_SESSION['login_user']) && $_SESSION['login_user']!="") {?>
	post('add_user.php', {name: cname.value, cname: carename.value, contact: ucontact.value, address: uadd.value, email: uemail.value, bloodgroup: bloodg.value, usergroup: userg.value, userid: ukid.value}); 
	<?php } else { ?>
	post('add_user.php', {name: cname.value, cname: carename.value, contact: ucontact.value, address: uadd.value, email: uemail.value, bloodgroup: bloodg.value, usergroup: userg.value}); 
	<?php } ?>
}
} 
}
}
}
return false;
}


function validcname(cname){
var chname = cname.value.length;
var letters = /^[A-Za-z]+$/;
if(chname!=0){	
if(!cname.value.match(letters)){
$("#errortype1").show();
$('#errortype1').text('Names have Alphabet characters only!');
return false;
}
else{
$("#errortype1").hide();
return true;
}
}
else{
$("#errortype1").show();
$('#errortype1').text('Child\'s Name is Required!');
/*alert('Child\'s Name is Required');*/
cname.focus();
return false;
}
}

function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters) || uname.value.length==0)
{
$("#errortype2").hide();	
return true;
}
else
{
$("#errortype2").show();
$('#errortype2').text('Names have alphabet characters only!');	
//alert('Names have alphabet characters only');
uname.focus();
return false;
}
}

function validcontact(ucontact,mx,my)
{ 
var numbers = /^[0-9]+$/;
var contact_len = ucontact.value.length;
//if (passid_len == 0 ||passid_len >= my || passid_len < mx)
if(!ucontact.value.match(numbers) ||contact_len > my || contact_len < mx || contact_len == 0)
{
$("#errortype3").show();
$('#errortype3').text('Valid Contact Number of Caregiver is Required!');/*alert("Valid Contact Number of Caregiver is Required!");*/
ucontact.focus();
return false;	
//return true;
}
else
{
/*alert('ZIP code must have numeric characters only');
uzip.focus();*/
$("#errortype3").hide();
return true;
}
}

function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var email_len = uemail.value.length;
if(uemail.value.match(mailformat) || email_len!= 0)
{
$("#errortype5").hide();	
return true;
}
else
{
$("#errortype5").show();
$('#errortype5').text('Valid Email Address is Required!');/*alert("Valid Email Address is Required!");*/
uemail.focus();
return false;
}
}	

function alphanumeric(uadd)
{ 
/*var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters) || uadd.value.length==0)
{*/
return true;
/*}
else
{
$("#errortype4").show();
$('#errortype4').text('User address must have alphanumeric characters only!');	
//alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}*/
}

	
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
	
	
	function formSubmission() {
	var comm = document.myForm2.comments;
	var stars2 = document.myForm2.stars.value;
	var stars3 = document.myForm2.stars2.value;
	var stars4 = document.myForm2.stars3.value;
	var stars5 = document.myForm2.stars4.value;
	var fuseremail = localStorage['careemail'];
	var fusername = localStorage['uname'];
	var fuserid = localStorage['uid'];
	var barobar = 0;
	
var commlength = comm.value.length;
var letters = /^[0-9a-zA-Z ]+$/;
if(commlength!=0 && stars2!="" && stars3!="" && stars4!="" && stars5!=""){	
$("#errortype7").hide();
//alert("Feedback sent successfully!");
//post('insert.html', {name: 'hello'}); 
post('add_user.php', {comment: comm.value, ratingu: stars2, ratingp: stars3, ratingv: stars4, ratingn: stars5, feedemail: fuseremail, feedname: fusername, feedid: fuserid});
barobar++;
}
else{
$("#errortype7").show();
if(commlength==0)
$('#errortype7').text('Please enter your feedback and rate all categories!');
else
$('#errortype7').text('Please rate all categories!');
/*alert('Child\'s Name is Required');*/
comm.focus();
return false;
}
return false;

	}
	
	function numberValidation() {
	var econtact = document.myForm3.enter_contact;
	var commlength = econtact.value.length;

	var numbers = /^[0-9]+$/;	
	
if(!econtact.value.match(numbers) ||commlength > 12 || commlength == 0)
{
$("#errortype10").show();
$('#errortype10').text('Valid Contact Number of Caregiver is Required!');/*alert("Valid Contact Number of Caregiver is Required!");*/
econtact.focus();
return false;	
//return true;
}
else
{

$("#errortype10").hide();
//alert("Feedback sent successfully!");
post('add_user.php', {econtact: econtact.value});
return false;
}		
return false;

	}
	
	function clickkeyboard()	
{
	openModal(2);
	$("#keyb").addClass('button-border');
	//setTimeout(function(){ $("#thisback").removeClass('button-border'); }, 500);
}
	function backkeyboard()	
{
	closeModal(2);
	//$("#keyb").removeClass('button-border');
	//setTimeout(function(){ $("#thisback").removeClass('button-border'); }, 500);
}
function homeglow()	
{	
	$("#hb").addClass('button-border');	
	speakthis("home");
}
	</script>    
    <script  src="scripts/index.js"></script>
<?php
/*$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select * from users where name='$user_check'", $con);
			$row = mysql_fetch_assoc($ses_sql);
			$uname =$row['name'];
			
			$carename =$row['care_name'];
			$carecontact =$row['care_contact'];
			$address = $row['address'];
			$careemail =$row['care_email'];
			$bloodg = $row['blood_group'];*/
?>
<script>
//var childname="<.?php echo $uname; ?>";
localStorage['uname']="<?php echo $uname; ?>";
localStorage['childname']="<?php echo $childname; ?>";
localStorage['carename']="<?php echo $carename; ?>";
localStorage['carecontact']="<?php echo $carecontact; ?>";
localStorage['careemail']="<?php echo $careemail; ?>";
localStorage['address']="<?php echo $address; ?>";
localStorage['bloodg']="<?php echo $bloodg; ?>";
localStorage['user_group']="<?php echo $user_group; ?>";
localStorage['uid']="<?php echo $uid; ?>";

var frateuse=<?php echo $frateuse; ?>;		
		var fratepic=<?php echo $fratepic; ?>;
		var fratevoice=<?php echo $fratevoice; ?>;
		var fratenav=<?php echo $fratenav; ?>;
		var commentfeed='<?php echo $ffeed; ?>';
		
		$("input[name=stars][value=" + frateuse + "]").attr("checked", "checked");
		$("input[name=stars2][value=" + fratepic + "]").attr("checked", "checked");
		$("input[name=stars3][value=" + fratevoice + "]").attr("checked", "checked");
		$("input[name=stars4][value=" + fratenav + "]").attr("checked", "checked");
		$("#comments").val(commentfeed);
</script>

</head>

	<body onload="myFunction()" style="background-image:url(img/bg1.png);background-repeat: no-repeat; background-size:100% 120%; overflow:hidden;"> 
			
            <!-----------MODAL Enter Number START-------------->
            <div id="myModal9" class="modal">
  			<span class="close cursor" onclick="closeModal(9)">&times;</span>
  			    
            <div class="modal-content" style="background-color:#F7F3C6">				
            	<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(9)">&nbsp;&nbsp;Profile</h1>
                </div>
                
                
                <div style="margin:5px 0px 35px 0px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent; padding:0px 15px;">
            	<form name="myForm3" action="" onsubmit="return numberValidation()" method="post">	
                    <div id="page-wrapper" class="slidecontainer" >			  		
                    	
    					<label for="rate">Enter Caregiver's No <span class="lalwala">*</span>:</label><br>
					    <input type="text" name="enter_contact" id="enter_contact" class="in-text">
                        <div id="errortype10" class="errors"></div><br><br>
                        
	                </div>      				
                    <div style="width:100%; text-align:left; position:absolute; bottom:0; background-color:#F7E3B6; padding:10px; margin-left:-15px;">
                    	<!--<button id="save" class="setting-buttons">SAVE</button>-->
                        <input type="submit" class="setting-buttons" value="GO">                        
                	</div>
                </form>    
    			</div>
                
                
                                                    	
    		</div>
            
			</div>
            <!-----------MODAL Enter Number END-------------->
                                   
            
            <!-----------MODAL 12 START-------------->
            <div id="myModal12" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(12)">&times;</span>-->
  			    
            <div class="modal-content" style="background-color:#F7F3C6; max-width:500px; min-width:200px; max-height:450px; min-height:200px;">	
            			
            	<div style="background:#dc5252; padding:5px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px; display:none;" onclick="backkeyboard()">&nbsp;&nbsp;User Login</h1>
                    
                </div>
                
                
                <div style="margin:5px 0px 35px 0px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent; padding:0px 15px;">
            	<form name="myForm12" action="index.php" method="post">	
                    <div id="page-wrapper" class="slidecontainer" style="padding-bottom:20px;">			  		
                    	<label for="forUsername">Child's Name<span class="lalwala">*</span></label><br>
			            <input id="forUsername" class="in-text" type="text" name="cname" placeholder="Child's Name" style="width:100%;"/>
			            <br><br>
          	
            			<label for="forPassword">Caregiver's Mobile Number<span class="lalwala">*</span></label><br>
			            <input id="forPassword" class="in-text" type="password" name="carenumber" placeholder="0000000000" style="width:100%;"/>
                        <br><br>
                        <input type="submit" class="setting-buttons" value="Login"><br><span style="font-family: 'Exo', sans-serif; color:#F00;"><strong><?php echo $error53." "; ?><?php echo $error; ?></strong></span><br>
                        
                        <div style="color:#dc5252;">
                        <strong>Note:</strong><br>
                        1.	Jellow works only on Google Chrome browser<br>
                        2.  Please make sure the volume of your speakers (software/hardware) increase upto your audible range<br>
						<!--2.	Please make sure to increase your device's speaker volume in order to hear Jellow's voice<br>-->
						</div>
	                </div>      				
                    <div style="width:100%; text-align:left; position:absolute; bottom:0; background-color:#F7E3B6; padding:10px; margin-left:-15px;">
                    	<!--<input type="button" class="setting-buttons" value="Registration" onClick="openModal(6);">-->
                        <a onClick="openModal(6);" style="color:#dc5252" href="#">New User Registration.....>>></a>                        
                	</div>
                </form>    
    			</div>                
                                                    	
    		</div>
            
			</div>
            <!-----------MODAL 12 END-------------->
            
            <!-----------MODAL 6 START-------------->
            <div id="myModal6" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(6)">&times;</span>-->
  			    
            <div class="modal-content" style="background-color:#F7F3C6">				
            	<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(6)">&nbsp;&nbsp;Profile<button class="bandkar" onclick="closeModal(6)">&times;</button></h1>
                </div>
                
                
                <div style="margin:5px 0px 35px 0px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent; padding:0px 15px;">
            	
                <?php if(isset($_SESSION['login_user']) && $_SESSION['login_user']!=""){ ?>
                <form name="myForm" action="" onsubmit="return formValidation()" method="post">	
                    <div id="page-wrapper" class="slidecontainer" >			  		
                    	<input type="hidden" name="ukid" id="ukid" value="<?php echo $uid; ?>" >
                        <label for="cname">Child's Name<span class="lalwala">*</span>: </label><br>
    					<input type="text" name="cname" id="cname" class="in-text" value="<?php echo $uname; ?>" readonly>
                        <div id="errortype1" class="errors"></div><br><br>
                        <label for="rate">Caregiver's Name :</label><br>
    					<input type="text" name="carename" id="carename"  class="in-text" value="<?php echo $carename; ?>">
                        <div id="errortype2" class="errors"></div><br><br>
    					<label for="rate">Caregiver's Contact No<span class="lalwala">*</span>:</label><br>
					    <input type="text" name="care_contact" id="care_contact" class="in-text" value="<?php echo $carecontact; ?>">
                        <div id="errortype3" class="errors"></div><br><br>
                        <label for="address">Home Address : </label><br>
    					<input type="text" name="address" id="address"  class="in-text" value="<?php echo $address; ?>">
                        <div id="errortype4" class="errors"></div><br><br>
                        <label for="email">Email Address <span class="lalwala">*</span>:</label><br>
    					<input type="email" name="email" id="email"  class="in-text" value="<?php echo $careemail; ?>">
                        <div id="errortype5" class="errors"></div><br><br>
                        <label for="email">User Group<span class="lalwala">*</span>:</label><br>
                        <input type="radio" name="user_group" value="therapist" <?php if($user_group=="therapist") echo "checked"; ?> > Therapist/Teacher<br>
						<input type="radio" name="user_group" value="parent" <?php if($user_group=="parent") echo "checked"; ?> > Parent/Caregive<br>    					                        
                        <div id="errortype23" class="errors"></div><br><br>
                        
    					<label for="bloodg">Blood Group :</label><br>
					    <!--<input type="text" name="blood-group" id="blood-group" x-webkit-speech class="in-text"><br><br>-->
                        <select name="bloodg" id="bloodg" style="width:50%;">
                          <option value="<?php echo $bloodg; ?>" default><?php echo $bloodg; ?></option>
                          <option value="NA">Not Selected</option>
                          <option value="A+">A+</option>
						  <option value="A-">A-</option>
						  <option value="B+">B+</option>
						  <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
						  <option value="AB-">AB-</option>
						  <option value="O+">O+</option>
						  <option value="O-">O-</option>
  						</select>
                        <br><br>
	                </div>
                    <?php } else { ?> 
                    <form name="myForm" action="" onsubmit="return formValidation()" method="post">	
                    <div id="page-wrapper" class="slidecontainer" >			  		
                    	<label for="cname">Child's Name<span class="lalwala">*</span>: </label><br>
    					<input type="text" name="cname" id="cname" class="in-text" value="">
                        <div id="errortype1" class="errors"></div><br><br>
                        <label for="rate">Caregiver's Name :</label><br>
    					<input type="text" name="carename" id="carename"  class="in-text" value="">
                        <div id="errortype2" class="errors"></div><br><br>
    					<label for="rate">Caregiver's Contact No<span class="lalwala">*</span>:</label><br>
					    <input type="text" name="care_contact" id="care_contact" class="in-text">
                        <div id="errortype3" class="errors"></div><br><br>
                        <label for="address">Home Address : </label><br>
    					<input type="text" name="address" id="address"  class="in-text">
                        <div id="errortype4" class="errors"></div><br><br>
                        <label for="email">Email Address<span class="lalwala">*</span>:</label><br>
    					<input type="email" name="email" id="email"  class="in-text">
                        <div id="errortype5" class="errors"></div><br><br>
                        <label for="email">User Group<span class="lalwala">*</span>:</label><br>
                        <input type="radio" name="user_group" value="therapist" checked > Therapist/Teacher<br>
						<input type="radio" name="user_group" value="parent" > Parent/Caregive<br>    					                        
                        <div id="errortype23" class="errors"></div><br><br>
    					<label for="bloodg">Blood Group :</label><br>
					    <!--<input type="text" name="blood-group" id="blood-group" x-webkit-speech class="in-text"><br><br>-->
                        <select name="bloodg" id="bloodg" style="width:50%;">
                          <option value="NA" default>Not Selected</option>
                          <option value="A+">A+</option>
						  <option value="A-">A-</option>
						  <option value="B+">B+</option>
						  <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
						  <option value="AB-">AB-</option>
						  <option value="O+">O+</option>
						  <option value="O-">O-</option>
  						</select>
                        <br><br>
	                </div>
                    
                    <?php } ?>     				
                    <div style="width:100%; text-align:left; position:absolute; bottom:0; background-color:#F7E3B6; padding:10px; margin-left:-15px;">
                    	<!--<button id="save" class="setting-buttons">SAVE</button>-->
                        <input type="submit" class="setting-buttons" value="SAVE">
                        
                	</div>
                </form>    
    			</div>
                
                
                                                    	
    		</div>
            
			</div>
            <!-----------MODAL 6 END-------------->
            
            <!-----------MODAL 7 START-------------->
            <div id="myModal7" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(7)">&times;</span>-->
  			    
            <div class="modal-content" style="background-color:#F7F3C6">				
            	<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(7)">&nbsp;&nbsp;Feedback<button class="bandkar" onclick="closeModal(7)">&times;</button>
                    </h1>
                </div>                
                
       
                
                
                <div style="margin:5px 0px 5px 0px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent; padding:0px 15px; padding-bottom:50px;">
            	<form name="myForm2" action="" onsubmit="return formSubmission()" method="post" >	
                    <div id="page-wrapper" class="slidecontainer" >			  		                    	
                        <div id="errortype7" class="errors"></div>
                        <br><label for="stars" style="font-weight:500">Easy to Use<span class="lalwala">*</span>: </label><br> 
                        <div class="rating">                        
                        <label>                        
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  						</label>  
                        </div>
                        
                        <br><label for="stars2" style="font-weight:500">Clear Picture<span class="lalwala">*</span>: </label><br> 
                        <div class="rating">                        
                        <label>                        
    <input type="radio" name="stars2" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars2" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars2" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars2" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars2" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  						</label>  
                        </div>
                        
                        <br><label for="stars3" style="font-weight:500">Clear Voice<span class="lalwala">*</span>: </label><br> 
                        <div class="rating">                        
                        <label>                        
    <input type="radio" name="stars3" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars3" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars3" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars3" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars3" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  						</label>  
                        </div>
                        
                        <br><label for="stars4" style="font-weight:500">Easy to Navigate<span class="lalwala">*</span>: </label><br> 
                        <div class="rating">                        
                        <label>                        
    <input type="radio" name="stars4" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars4" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars4" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars4" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars4" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  						</label>  
                        </div>  
                        
                        <br><br><label for="cname">Comments / Suggestions<span class="lalwala">*</span>: </label><br>
    					<input type="text" name="comments" id="comments" class="in-text" style="max-width:1000px;">
                        <br><br>                    
	                </div>      				
                    <div style="width:100%; text-align:left; position:absolute; bottom:0; background-color:#F7E3B6; padding:10px; margin-left:-15px;">
                        <input type="submit" class="setting-buttons" value="Submit">                        
                	</div>
                </form>    
    			</div>                 
                                                    	
    		</div>            
			</div>
            <!-----------MODAL 7 END-------------->
            
            
            <div align="right" style="padding-right:7px; position:absolute; left:90%; top:0; z-index:1000;" id='menusathi'>
            <!--<span id='thisisd'>bagha</span>--><a href="#" id='mazamenu' onClick="dakhav()"><img src="img/home/menu.png" class="img-responsive" width="30%;"></a>
            
            <div class="dropdown-content" id="menu-bagha" style="text-align:left;margin-right:10px;/*position:absolute; left:90%; top:10%; z-index:9000; */">
                    <!--<a href="#" onClick="openModal(12);">Login</a>-->
                    <a href="#" onClick="openModal(6);">Profile</a>                    
                    <a href="#" onClick="openModal(5);">About Jellow</a>
                    <a href="#" onClick="openModal(4);">Tutorial</a>
                    <!--<a href="#" onClick="openModal(2);">Keyboard</a>-->                    
                    <a href="#" onClick="openModal(3);">Settings</a>
                    <a href="#" onClick="openModal(7);">Feedback</a>
                    <?php if(isset($user_check)){ ?>
                    <a href="logout.php">Logout</a>
                    <?php } ?>
                                        
            </div>        
            </div>
			<table border="0" width="100%" style="vertical-align:top; position:fixed;">
            <!--<tr>
            	<td align="right" colspan="3" style="padding-right:4%;"><span class="glyphicon glyphicon-menu-hamburger" style="width:50px;"></span></td>
            </tr>-->
            <tr valign="bottom">
            <!-----------LEFT COLUMN-------------->
            <td width="20%" align="center" valign="top" height="60%">
			<div id="col2"  align="center">
				<p>
				<table height=50% width=100%>
					<tr><td id="side-1-1"><a onClick="one();"><img width=80% src="img/1c.png" /></a></td></tr>
					<tr><td id="side-1-2"><a onClick="three();"><img width=80% src="img/3b.png" /></a></td></tr>
					<tr><td id="side-1-3"><a onClick="five();"><img width=80% src="img/5b.png" /></a></td></tr>
				</table>				
				</p>
			</div>
            </td>
            <!-----------LEFT COLUMN-------------->
            
            
            <!-----------CENTRAL ITEMS PART-------------->
            <td width="60%" valign="top" id="madhla" >
			<div>
            	<table width="100%" height="100%" border="0">
                <tr >
                <td width="100%" valign="top">
                
				<div id ="row1" class="row1" >  
                         
				<p align="center" >
				<table width=100% height=100% border=0>
					<tr>
						<td align="center" id="main11"><a onClick="greet();"><img width=50% src="img/greet.png" /></a><br>GREET AND FEEL</td>
				        <td align="center" id="main12"><a onClick="daily();"><img width=50% src="img/daily.png"/></a><br>DAILY ACTIVITIES</td>
				        <td align="center" id="main13"><a onClick="eat();"><img  width=50% src="img/eat.png"/></a><br>EATING</td>
				    </tr>
				    <tr>
						<td align="center" id="main21"><a onClick="fun();"><img width=50% src="img/fun.png"/></a><br>FUN</td>
				        <td align="center" id="main22"><a onClick="learning();"><img width=50% src="img/learn.png"/></a><br>LEARNING</td>
				        <td align="center" id="main23"><a onClick="people();"><img  width=50% src="img/people.png"/></a><br>PEOPLE</td>
				    </tr>
				    <tr>
						<td align="center" id="main31"><a onClick="places();"><img width=50% src="img/places.png"/></a><br>PLACES</td>
				        <td align="center" id="main32"><a onClick="time();"><img width=50% src="img/time.png"/></a><br>TIME AND WEATHER</td>
				        <td align="center" id="main33"><a onClick="help();"><img  width=50% src="img/help.png"/></a><br>HELP</td>
				    </tr>    
				</table> 
				</p>
				</div>
				</td>            
            	</tr>   
   				</table>				
			</div>
            </td>
            <!-----------CENTRAL ITEMS PART-------------->
            
            <!-----------RIGHT COLUMN-------------->
            <td width="20%" valign="top">
			<div id="col3" align="center">
				<p>
				<table height=70% width=100%>
					<tr><td id="side-2-1"><a onClick="two();"><img width=80% src="img/2c.png" /></a></td></tr>
					<tr><td id="side-2-2"><a onClick="four();"><img width=80% src="img/4b.png" /></a></td></tr>
					<tr><td id="side-2-3"><a onClick="six();"><img width=80% src="img/6b.png" /></a></td></tr>
				</table>
				</p>				
			</div>
            </td>
            <!-----------RIGHT COLUMN-------------->
            
            
            </tr>
            <!-----------FIRST ROW END-------------->
            
            <!-----------BOTTOM ROW START------------>
            <tr >
    		<td id="khalifoot" style="position:fixed; width:100%; /*top:79%;*/ /*bottom:-32px;*/ background-image:url(img/bg_low.png);background-repeat: no-repeat; background-size:100%; z-index:200; padding:2%">
			<div id="bottom" align="center">
                <table width=60% height="50%" border=0><tr height="30%">
                <td align="center" width="33%"><img  width=55% src="img/back_button.png" style="opacity:0.7;"/></td>
                <td align="" valign="bottom">
				<div id="row2" ><p align="center"><a onClick="homeglow();"><img width=40% src="img/home_2.png" id="hb"/></a></p></div>
                </td>
                <td align="center" width="33%"><a href="#" onclick="clickkeyboard()"><img  width=55% src="img/keyboard_button.png" id="keyb"/></a></td>
                </tr></table>
			</div>
        	</td>
    		</tr>
            <!-----------BOTTOM ROW END-------------->
            
            </table>
            
            <!-----------MODAL 1 START-------------->
            <div id="myModal1" class="modal">
  			<span class="close cursor" onclick="closeModal(1)">&times;</span>
  			<div class="modal-content">				
                Hello World
    		</div>
			</div>
            <!-----------MODAL 1 END-------------->
            
            <!-----------MODAL 4 START-------------->
            <div id="myModal4" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(4)">&times;</span>-->
  			<div class="modal-content" style="background-image:url(img/bg1.png);background-repeat: no-repeat; background-size:100% 250%;">		
            	<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(4)">&nbsp;&nbsp;Tutorial<button class="bandkar" onclick="closeModal(4)">&times;</button></h1>
                </div>		
                <div style="margin-top:5px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent;">
            		
                    <div id="page-wrapper" class="slidecontainer" style="max-width:880px; margin-right:8px;">
			  		
                    <div>
  					<p id="msg" style="display:none; height:10px; position:fixed; top:12%;"></p>
                    <ul>
                    <li><strong>Important</strong>: Indian Accent only works on Google Chrome browser<br>
                    <li>Jellow has 9 central category buttons and 6 expressive side buttons.<br>
                    <strong>Category buttons:</strong><br>
                    <img src="img/home/categorybuttons.png" class="img-responsive">
                    <br>
                    <strong>Expressive buttons:</strong><br>
                    <img src="img/home/expressivebuttons.png" class="img-responsive"><br>
                    </li>
                    
                    <li>To speak using Jellow, the user first clicks on any category button and then on an expressive button in that order. For instance, Jellow will say, "I want to eat" using the selection below.<br>                    
                    <img src="img/home/eatingcategory1.png" class="img-responsive"><br>
                    </li>
	                <li>By double clicking on a category button, the user can access further categories.<br><br>                    
                    <strong>Level 1 categories:</strong>
                    <img src="img/home/speakingwithjellowimage2.png" class="img-responsive"><br>
                    <strong>Level 2 categories:</strong>
                    <img src="img/home/image4.png" class="img-responsive"><br>                   
                    <strong>Level 3 options:</strong>
                    <img src="img/home/eatingcategory3.png" class="img-responsive"><br>                    
                    </li>
                    
                    <li>
                    The user can customize their profile and adjust the basic voice settings of the application by clicking on the top right corner of the screen.<br>
                    <img src="img/home/settings.png" class="img-responsive"><br>
                    </li>
                    
                    <li>
                    Jellow can also be used to teach children sequential steps of daily activities. By clicking on any individual step, the user may view the expressive buttons:  <br>                  
					<strong>Toilet sequence:</strong><br>
                    <img src="img/home/sequencewithoutexpressivebuttons.png" class="img-responsive"><br>
                    <strong>Expressive buttons in the sequence:</strong><br>
                    <img src="img/home/sequencewithexpressivebuttons.png" class="img-responsive"><br>
                    </li>
                    
                    <li>
                    <strong>Software version 1.0</strong>
                    </li>
                    </ul>                   
                    </div>
	                </div>  
    			
    			</div>
    		</div>
			</div>
            <!-----------MODAL 4 END-------------->
            
            <!-----------MODAL 5 START-------------->
            <div id="myModal5" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(5)">&times;</span>-->
  			<div class="modal-content" style="background-image:url(img/bg1.png);background-repeat: no-repeat; background-size:100% 250%;">		
            	<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(5)">&nbsp;&nbsp;About Jellow<button class="bandkar" onclick="closeModal(5)">&times;</button></h1>
                    </div>		
                <div style="margin-top:5px; font-family:Verdana, Geneva, sans-serif;  height:100%; overflow-y:auto; background-color:transparent; padding:0px 15px;">
            		
                    <div id="page-wrapper" class="slidecontainer" >
			  		
                    <div>
  					<p id="msg" style="display:none; height:10px; position:fixed; top:12%;"></p>
                    <strong>General Information</strong><br>
                    <ul>
                    <li>Jellow is a communicator using icons to enable speech and can be used by those learning to speak or those who have difficulty with speech.</li>
                    <li>It is developed at IDC School of Design at the Indian Institute of Technology Bombay located in Mumbai.</li>
                    <li>A novel Visual Emotional Language Protocol or VELP was concieved and developed by the project investigators in order to enhance the language ability of Jellow. VELP represents the 6 expressive icons that form the core of the interface.</li>
                    <li>Using these core icons, the child can communicate their likes, dislikes, and needs with others.</li>
                    <li>Jellow is conceived as children-friendly with an easy-to-learn interface.</li>
                    <li>The application is optimized for Android Tablets.</li>
                    </ul>
                    
                    <br><strong>Software Version 1.0</strong><br>
                    <ul>
                   	<li>The current version of Jellow is 1.0. The application is under further development. Therefore if you have any suggestions for us, please submit it under the feedback tab.</li>
                    </ul>
                    
                    <br><strong>Terms of Use</strong><br>
                    <ul>
                    <li>Jellow is licensed under a Creative Commons Attribution Non-commercial Share Alike 4.0 International License.</li>
                    <li>Work on Jellow is attributed to the Indian Institute of Technology Bombay.</li>
                    <li>The content in this application comprising icons, layout, architecture, visual identity, translation and the software codes can be shared and adopted but cannot used for commercial purposes.</li>
                    <li>When the content is used we request you to acknowledge Indian Institute of Technology Bombay.</li>
                    <li>Jellow is available for download at www.dsource.in/tool/jellow</li>
                    <li>If interested in further developing the code, please write to Professor Ravi Poovaiah at ravi@iitb.ac.in</li>
                    </ul>
                    
                    
                    <br><strong>Credits:</strong><br>
                    <ul>
                    <li><strong>Idea Conception, Project Investigation and Supervision:</strong><br>Prof. Ravi Poovaiah and Dr. Ajanta Sen.</li>
                    <li><strong>Initial Concept Development:</strong><br>Anchal Kumar, Samraat Sardesai, Peter Joseph, Antara Hazarika</li>
                    <li><strong>Software Development:</strong><br>Rahul Rupchand Jidge, Narayana Reddy, Sumeet Agarwal, Roop Sahoo, Shruti Agarwal, Yogesh Masaye, Aastha Joshi, Dhairya Dand, Pritam Pebam</li>
                    <li><strong>Website Design:</strong><br>Prof. Ravi Poovaiah, Yogesh Masaye, Vaibhav Shah, Sumedh Garud, Roop Sahoo</li>
                    <li><strong>Icons, Visual Design and Voice:</strong><br>Vinaya Tawde, Anisha Malhotra, Nikita Iyer, Ganesh Gajjela, Simone Sen</li>
                    <li><strong>Translation:</strong><br>Sachin Sonawane, Dr. Sudha Srinivasan</li>
                    <li><strong>Research, Vocabulary Development and User Studies:</strong><br>Dr. Sudha Srinivasan</li>
                    <li><strong>Support:</strong><br>E-kalpa project sponsored under NMEICT by MHRD, Microsoft Design Expo 2004 and a 1-year seed grant through the UNICEF Innovation Fund.</li>
                    </ul>
                    
                                     
                    </div>
	                </div>  
    			
    			</div>
    		</div>
			</div>
            <!-----------MODAL 5 END-------------->
            
            <!-----------MODAL 2 START-------------->
            <div id="myModal2" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(2)">&times;</span>-->
  			<div class="modal-content" style="background-color:#F7F3C6">				
            	
            	<div style="margin-top:-20px; font-family:Verdana, Geneva, sans-serif; background-image:url(img/bg1.png);background-repeat: no-repeat; background-size:100% 250%; height:100%;">
            		
                    <div id="page-wrapper" class="slidecontainer" >
			  		<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="backkeyboard()" id="closekey">&nbsp;&nbsp;Keyboard<button class="bandkar" onclick="closeModal(2)">&times;</button></h1>
                    </div>
  					<p id="msg" style="display:none;"></p>
                    
                    <div style="width:100%; height:70%;">
    				<div style="height:30%; text-align:center;" id="text-chi">
					    <input type="text" name="speech-msg" id="speech-msg" x-webkit-speech style="width:50%; border:none; border-bottom: 2px solid #dc5252; background-color: transparent"><br>
    				</div>
                    
    				<div style="height:30%; text-align:center; margin-top:4%;">
                    	<!--<label for="voice">Voice : </label>--><select name="voice" id="voice" style="width:50%; display:none;"></select><br>    					
                    </div>
    				
                    <div style="height:40%; text-align:center;" id="spbutton_chi"><input type="image" src="img/speaker_button.png" id="speak" ></div>
					</div>
	                </div>  
    			<script  src="scripts/index.js"></script>
    			</div>			
    		</div>
			</div>
            <!-----------MODAL 2 END-------------->
            
            
            
            
            
            <!-----------MODAL 3 START-------------->
            <div id="myModal3" class="modal">
  			<!--<span class="close cursor" onclick="closeModal(3)">&times;</span>-->
  			<div class="modal-content" style="background-color:#F7F3C6">				
            
            	<div style="margin-top:-20px; font-family:Verdana, Geneva, sans-serif; background-image:url(img/bg1.png);background-repeat: no-repeat; background-size:100% 250%; height:100%;">
            		
                    <div id="page-wrapper" class="slidecontainer" >
			  		<div style="background:#dc5252; padding:0px 7px; color:white;">
                    <h1 style="font-weight:400;"><img src="img/home/back-arrow.png" style="max-height:30px; max-width:40px;" onclick="closeModal(3)">&nbsp;&nbsp;Settings<button class="bandkar" onclick="closeModal(3)">&times;</button></h1>
                    </div>
  					<p id="msg" style="display:none;"></p>
                    
                    <div>
    				<!--<div style="height:30%; text-align:center; margin-top:8%;">
					    <input type="text" name="speech-msg" id="speech-msg" x-webkit-speech style="width:50%; border:none; border-bottom: 2px solid #dc5252; background-color: transparent"><br>
    				</div>-->
                    
    				<div style="height:30%; text-align:left; margin-top:6%; margin-left:2%;">
                    	<label for="volume">Speech Volume : </label><br>
    					<input type="range" min="0" max="1" step="0.1" name="volume" id="volume" value="1" style="width:50%;" class="slider"><br><br>
                        <label for="rate">Speech Speed</label><br>
    					<input type="range" min="0.1" max="3" step="0.1" name="rate" id="rate" value="1" style="width:50%;" class="slider"><br><br>
                        <style>
						input[type=range] {
  -webkit-appearance: none; /* Hides the slider so that custom slider can be made */
  width: 100%; /* Specific width is required for Firefox. */
  background: transparent; /* Otherwise white in Chrome */
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
}

input[type=range]:focus {
  outline: none; /*Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though.*/
}

input[type=range]::-ms-track {
  width: 100%;
  cursor: pointer;

  /* Hides the slider so custom styles can be added */
  background: transparent; 
  border-color: transparent;
  color: transparent;
}
input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  /*border: 1px solid #000000;*/
  height: 20px;
  width: 20px;
  border-radius: 10px;
  background: #dc5252;
  cursor: pointer;
  margin-top: -8px; /* You need to specify a margin in Chrome, but in Firefox and IE it is automatic */
  /*box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;*/ /* Add cool effects to your sliders! */
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  background:#ccc;	
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #dc5252;
}
						</style>
                        <label for="pitch">Voice Pitch</label><br>
    					<input type="range" min="0" max="2" step="0.1" name="pitch" id="pitch" value="1" style="width:50%;" class="slider"><br><br>
                    </div>
    				
                    <div style="width:100%; text-align:left; position:absolute; bottom:0; background-color:#F7E3B6; padding:10px;">
                    	<button id="demo" class="setting-buttons">DEMO</button>&nbsp;&nbsp;&nbsp;<button id="save" class="setting-buttons">SAVE</button>
                    </div>
					</div>
	                </div>  
    			<script  src="scripts/index.js"></script>
    			</div>			
    		</div>
			</div>
            <!-----------MODAL 3 END-------------->
            
            
            
<!--<div id="footer"></div>-->
<style>
body{
font-size:150%;
}
.lalwala{
	color:red;
}
.bandkar{
	background:none;
	border-style:none;
	float:right;
	color:white;
	opacity:1;
	font-size:36px;
	width:32px;
}
.bandkar:visited{
	background:none;
	border-style:none;	
}
@media (max-width:767px){
	.bandkar{
	background:none;
	border-style:none;
	float:right;
	color:white;
	opacity:1;
	font-size:18px;
	width:24px;
}
}
@media screen and (max-width: 992px) {
    body {
        font-size: 110%;
    }
	.bandkar{
	background:none;
	border-style:none;
	float:right;
	color:white;
	opacity:1;
	font-size:24px;
	width:28px;
}
	.modal-content {
		font-size: 12px;
		font-weight:100;
	}
	.modal-content h1 {
		font-size: 18px;
	}
}
#speech-msg:focus {
	outline: none;
}
input:focus {
	outline: none;
}
#side-1-1, #side-1-2, #side-1-3, #side-2-1, #side-2-2, #side-2-3{
	padding:8%;
}
.setting-buttons
{
width:40%; background-color:#BBB; border:1px solid #BBB; border-radius:3px; padding:3px; font-weight:400;
}
#row1
{
	height:auto; width:100%; position:relative; overflow:hidden; vertical-align:top;
}
.dropdown-content {
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 9999999;
    right: 0;
    left: auto;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1001;
  padding-top: 10%;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5) ;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
  height: 75%;  
}

.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #FC3;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}
.scrollingTable {
            width: 30em;
            overflow-y: auto;
        }
</style>
<script>
function openModal(x) {
  document.getElementById('myModal'+x).style.display = "block";
  $("#menu-bagha").hide();
}

function closeModal(y) {
  //$('#myModal'+y).closest('div').find("input[type=text], textarea").val("");	
  // atle form fields rikami karnyasathi
  	
  document.getElementById('myModal'+y).style.display = "none";
  //$(this).closest('form').find("input[type=text], textarea").val("");
}
</script>
<script>
	var yacha_rate = localStorage['rate1'];
	var yacha_pitch = localStorage['pitch1'];
	if (yacha_rate) var rateghe = yacha_rate;	
	else rateghe = 1;
	if (yacha_pitch) var pitchghe = yacha_pitch;
	else pitchghe = 1;
	document.getElementById('rate').value=rateghe;
	document.getElementById('pitch').value=pitchghe;
	</script>


</body>
</html>
