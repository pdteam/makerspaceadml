 
 
 <?php

     $data = json_decode($_POST["data"]);//get variables from the post

	 
	$name = $data->{'name'};
	$email = $data->{'email'};
	$telephone = $data->{'telephone'};
	$need = $data->{'need'};
	$businessname = $data->{'businessname'};
	$businesstype = $data->{'businesstype'};
	$design = $data->{'design'};
	$advancedmanufacturing = $data->{'advancedmanufacturing'};
	$wearableiot = $data->{'wearableiot'};
	$digitalmedia = $data->{'digitalmedia'};
	$videoanimated = $data->{'videoanimated'};
	$mobileapplications = $data->{'mobileapplications'};
	$contactemail = $data->{'contactemail'};
	$contactphone = $data->{'contactphone'};
	
	require 'sendgrid-php.php';

	$from = new SendGrid\Email($name, $email);
	$subject = "MadeMill Website [".$name.']';
	$to = new SendGrid\Email("prototypeD TEAM Inc.", "info@pd.team");
	$content = new SendGrid\Content("text/html", 'From: '.$name.'<br/>Email: '.$email.'<br/>Telephone: '.$telephone.'<br/>Business Name: '.$businessname.'<br/>Business Type: '.$businesstype.'<br/>3D Design: '.$design.'<br/>Advanced Manufacturing: '.$advancedmanufacturing.'<br/>Wearable / IoT: '.$wearableiot.'<br/>Digital Media: '.$digitalmedia.'<br/>Video / Animation: '.$videoanimated.'<br/>Mobile Application: '.$mobileapplications.'<br/>Contact by Email: '.$contactemail.'<br/>Contact by Phone: '.$contactphone.'<br/>Service Need: <br/>'.$need);

	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);

//	print_r("Name".$name);
//	print_r("Email".$email);
	
	echo 'Thank you ' . $name . '. Your request has been submitted.';
	//print_r($response);
//	print_r($response->statusCode());
//	print_r($response->headers());
//	print_r($response->body());


?>
