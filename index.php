<?php
$to  = 'youremail@domain.com'; 
// subject
$subject = 'This is a Test Message from the Browser';
// message
$message = '
<html>
<head>
  <title>Thank you for Using</title>
</head>
<body>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  <table>
	<tr><td>Warm Greetings!</td></tr>
  </table>
</body>
</html>';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1; boundary=\"'.$mime_boundary.'"' . "\r\n";
// Additional headers
$headers .= 'From: Your Company Name<info@yourcompanyname.com>'."\r\n";
// Mail it
mail($to, $subject, $message, $headers);
?>
