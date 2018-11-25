 
 
 <?php

     $data = json_decode($_POST["data"]);//get variables from the post

	 
	$name = $data->{'name'};
	$businessname = $data->{'businessname'};
	$businessnumber = $data->{'businessnumber'};
	$businesstype = $data->{'businesstype'};
	$email = $data->{'email'};
	$telephone = $data->{'telephone'};
	
	$address = $data->{'address'};
	$comments = $data->{'comments'};
	$sqft = $data->{'sqft'};
	$floors = $data->{'floors'};


	$infoTags = $data->{'infoTags'};
	$roomLabels = $data->{'roomLabels'};
	$modelExport = $data->{'modelExport'};

	$estimatedTotal = $data->{'estimatedTotal'};

	$contactemail = $data->{'contactemail'};
	$contactphone = $data->{'contactphone'};
	
	require 'sendgrid-php.php';

	
	$date = date("D M d, Y G:i");
	
	$from = new SendGrid\Email($name, $email);
	$subject = "MadeMill Matterport Order [".$name.']';
	$to = new SendGrid\Email("prototypeD TEAM Inc.", "info@pd.team");
	$beverly = new SendGrid\Email("Beverly Castro", "beverly@pd.team");
	$rudy = new SendGrid\Email("Rudy Marengo", "rudy@pd.team");
	$content = new SendGrid\Content("text/html", 
	$date.
	'
<br/><br/>

	Hello, you have received an order for a Matterport 3D Scan<br/> <br/> 
	From: '.$name.'<br/>
	Business Name: '.$businessname.'<br/>
	Business Number: '.$businessnumber.'<br/>
	Business Type: '.$businesstype.'<br/>
	Email: '.$email.'<br/>
	Telephone: '.$telephone.'<br/>

	Address: '.$address.'<br/>
	Comments: '.$comments.'<br/>
	Square Feet: '.$sqft.'<br/>
	Floors: '.$floors.'<br/>
	
	Info Tags: '.$infoTags.'<br/>
	Room Labels: '.$roomLabels.'<br/>
	Model Export: '.$modelExport.'<br/>

	Estimated Total: $'.$estimatedTotal.' + HST<br/>

	Contact by Email: '.$contactemail.'<br/>
	Contact by Phone: '.$contactphone.'<br/>');

	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);

	$mail = new SendGrid\Mail($from, $subject, $beverly, $content);
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);

	$mail = new SendGrid\Mail($from, $subject, $rudy, $content);
	$apiKey = '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';
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);
	
	echo 'Thank you ' . $name . '. Your request has been submitted.';
	//print_r($response);
//	print_r($response->statusCode());
//	print_r($response->headers());
//	print_r($response->body());


?>
