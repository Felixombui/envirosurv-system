<?php
$names=$_POST['names'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$fullmessage='You have a contact from: '.$names.' Email Address:'.$email.'. Message: '.$message.'';
$headers='From:info@envirosurvsystems.com';
@mail('info@envirosurvsystems.com',$subject,$message)
?>
<div style="background-color: grey; color:white">
Your message has been sent successfully. <a href="index.html">Go back</a>
</div>
<?php

?>