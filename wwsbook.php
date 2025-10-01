<html>
<head>

<META NAME="Keywords" CONTENT="wrockwardine wood school staff reunion">
<META NAME="Description" CONTENT="Wrockwardine Wood School staff reunion 2015">
<META NAME="Author" CONTENT="webmaster@telfordsites.org.uk">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8860-1">
<meta http-equiv="Resource-Type" content="document">
<meta http-equiv="Distribution" content="global">
<meta http-equiv="Copyright" content="Richard Foxcroft, 2015">
<meta http-equiv="Reply-to" content="dyfed.morgan@virgin.net">

<title>WWS Staff Reunion 2015</title>
 
<LINK REL="STYLESHEET" HREF="styles.css"> 
 
</head>
<body>
<table width="800"><tr><td>
<h1>WWS Staff Reunion Booking Form</h1>

<?php
$to = "dyfed.morgan@virgin.net" ;
$subject = "Booking Request from WWS Reunion website" ;
$surname = $_REQUEST['surname'] ; 
$forename = $_REQUEST['forename'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$places = $_REQUEST['places'] ;
$payment = $_REQUEST['payment'] ;
$message = $_REQUEST['message'] ;
$headers = "From: $email" ;
$testEmail=strpbrk($email, '@') ;
$validEmail=substr($testEmail, 0, 1) ;
if (!$validEmail)
	{print "<p>A valid email address is required.</p>" ;
	?>
		<p><a href="http://www.telfordsites.co.uk/wws/bacs.html"><b>Try again</b></a></p>
	<?php
	}
	else
		$sent = mail($to, $subject, 
"Surname: " .   $surname . "\n\r" . 
"Forename: " .  $forename . "\n\r" . 
"Email: " .     $email . "\n\r" .  
"Phone no: " .  $phone . "\n\r" . 
"Places: " .    $places . "\n\r" . 
"Payment:" .    $payment . "\n\r" . 
"Comment:" .    $message,$headers) ;
		if($sent)
			{print "<h3>Your booking was sent successfully.</h3><p>We will check that your payment has been received, and look forward very much to seeing you on June 6th.</p>"; }
		else
			{print "<p>Sorry, we encountered an error sending your message.
				<br>Did you enter a valid email address?
				<br>If so, please try later.
				</p>" ; 
			}
?>

</table>
</body>
</html>