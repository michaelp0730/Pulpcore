<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bio/Contact &ndash; David Russell Talbott</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="stylesheet" href="style.css" type="text/css" />
<script language="JavaScript">
<!--
today=new Date();
y0=today.getFullYear();

function validateForm()
{
var x=document.forms["myForm"]["name"].value
if (x==null || x=="")
  {
  alert("Please enter your name.");
  return false;
  }

var x=document.forms["myForm"]["email"].value
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please enter a valid e-mail address.");
  return false;
  }

var x=document.forms["myForm"]["message"].value
if (x==null || x=="")
  {
  alert("Please enter a message.");
  return false;
  }
}
// end hiding --->
</script>
</head>

<body>
<span id="left_bar"> <!-- Begin Left Bar -->
	<a href="index.html"><img src="images/pulpcore_logo.jpg" alt="Pulpcore - The Art of David Russell Talbott" width="224" height="274" class="border" /></a>
    <h3>FOR SALE:</h3>
    <ul>
        <li><a href="http://www.etsy.com/shop/pulpcore" target="_new">Pulpcore.Etsy.com</a></li>
    </ul>
    <p><i><a href="http://www.etsy.com/listing/54067705/american-pulpcore-no7-precautionary" target="_new">&quot;American Pulpcore: Precautionary Tales&quot;</a></i> now available on Etsy
    <a href="http://www.etsy.com/listing/54067705/american-pulpcore-no7-precautionary" target="_new"><img src="images/pulpcore_cover.jpg" alt="Pulpcore Cover" width="224" height="224" class="cover" /></a></p>
    <h3>ARTICLES &amp; INTERVIEWS:</h3>
    <ul>
        <li><a href="http://drsketchysandiego.wordpress.com/2009/11/28/dr-sketchys-november-2009-art-star-david-russell-talbott/" target="_new">Dr. Sketchy's Featured Art Star Event</a></li>
        <li><a href="http://www.juxtapoz.com/Features/knee-deep-in-dark-vomit-an-exclusive-interview" target="_new">Clowntown featured in Juxtapoz</a></li>
        <li><a href="http://www.sdcitybeat.com/sandiego/article-3451-the-dark-side-of-the-limelight.html" target="_new">The Dark Side of the Limelight</a></li>
        <li><a href="http://murphydesign1.blogspot.com/search?updated-min=2008-01-01T00%3A00%3A00-08%3A00&updated-max=2009-01-01T00%3A00%3A00-08%3A00&max-results=50" target="_new">Pulpcore at Art Basel Know Exhibition</a></li>
    </ul>
</span> <!-- End Left Bar -->

<span id="main_content"> <!-- Begin Main Content -->
	<div id="tagline">
    <h1>PULPCORE:</h1><h6>THE ART OF</h6><h2>DAVID RUSSELL TALBOTT</h2>
    </div>

    <div id="nav"> <!-- Begin Navigation -->
    <ul>
    	<li><a href="index.html">Home</a></li>
        <li><a href="new_pulp.html">New Pulp</a></li>
        <li><a href="american_pulpcore.html">American Pulpcore</a></li>
        <li><a href="hollywood_pulpcore.html">Hollywood Pulpcore</a></li>
        <li style="padding-right:0;"><a href="bio_contact.html" class="selected" style="color:#323030;">Bio/Contact</a></li>
    </ul>
    </div> <!-- End Navigation -->

    <div id="bio_content">
<?php
  require_once('recaptchalib.php');
  $privatekey = "6LesYcgSAAAAAEU8cIMYf-5jTMsCpYiFb_5q4u8t";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Please go back and try it again.<p><a href=\"javascript:history.go(-1)\">Go Back</a></p>");
  } else {
    // Your code here to handle a successful verification
  }
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$body =
"Name: $name
Email: $email
Message: $message";
mail("pulpcore@cox.net", "Message from DavidRussellTalbott.com", "$body", "From: $email");
print "<h3>Thanks for contacting me $name.</h3><p>I'll get back to you as soon as possible.</p><p>-David</p>";
?>

    </div>

</span> <!-- End Main Content -->
<div id="footer">Copyright &copy; 2006&ndash;<script language="javascript"><!--- Hide from old browsers
    document.write(y0);
  // end hiding ---></script> | David Russell Talbott | All Rights Reserved | <a href="http://pellegrinipage.com/portfolio/" target="_new" rel="me">Web Design by Michael Pellegrini</a></div>

</body>
</html>
