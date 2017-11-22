<?php
$to =  $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["body"];
$adr = explode(";",$to);
$headers = 'From: miutea@gmail.com' . "\r\n" .
    'Reply-To: miutea@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
try{
	for($i = 0;$i<sizeof($adr);$i++){
		if($adr[$i] != ""){
			$address = $adr[$i];
			mail($address, $subject, $message, $headers);
		}
	}
	header("Location: index.php?sent=1");
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>