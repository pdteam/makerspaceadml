 
 
 <?php

 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$need = $_POST['need'];

	$businessname = $_POST['businessname'];
	$businesstype = $_POST['businesstype'];
	$design = $_POST['design'];
	$advancedmanufacturing = $_POST['advancedmanufacturing'];
	$wearableiot = $_POST['wearableiot'];
	$digitalmedia = $_POST['digitalmedia'];
	$videoanimated = $_POST['videoanimated'];
	$mobileapplications = $_POST['mobileapplications'];
	$contactemail = $_POST['contactemail'];
	$contactphone = $_POST['contactphone'];
	
	require 'sendgrid-php.php';

	$from = new SendGrid\Email($name, $email);
	$subject = "MadeMill Website [".$name.']';
	$to = new SendGrid\Email("prototypeD TEAM Inc.", "info@pd.team");
	$content = new SendGrid\Content("text/html", '
	From: '.$name.'<br/>
	Email: '.$email.'<br/>
	Telephone: '.$telephone.'<br/>
	Business Name: '.$businessname.'<br/>
	Business Type: '.$businesstype.'<br/>
	3D Design: '.$design.'<br/>
	Advanced Manufacturing: '.$advancedmanufacturing.'<br/>
	Wearable / IoT: '.$wearableiot.'<br/>
	Digital Media: '.$digitalmedia.'<br/>
	Video / Animation: '.$videoanimated.'<br/>
	Mobile Application: '.$mobileapplications.'<br/>
	Contact by Email: '.$contactemail.'<br/>
	Contact by Phone: '.$contactphone.'<br/>
	Service Need: <br/>'.$need);

	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);

	
	echo 'Thank you ' . $name . '.  '.$response.'.';
	
//	print_r($response->statusCode());
//	print_r($response->headers());
//	print_r($response->body());


?>
