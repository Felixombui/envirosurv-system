<?php
$names=$_POST['names'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$fullmessage=urlencode('You have a contact from: '.$names.' Email Address:'.$email.'. Message: '.$message.'');
$headers='From:info@envirosurvsystems.com';
//$url='http://envirosurvsystems.com/mailer.php?emailaddress='.$
//file_get_contents($url);
?>
<div style="background-color: grey; color:white; margin-top: 200px; padding:20px;">
Your message has been sent successfully. <a href="index.html">Go back</a>
</div>
<?php

?>