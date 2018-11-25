<?php 
if(isset($_POST["data"]))
{
    $data = json_decode($_POST["data"]);//get variables from the post
	
	//create the insertion string
	$sql = 'insert into dbo.mademillcom_submittedproject 
		(uniqueid, 
		name, 
		email, 
		phonenumber, 
		need, 
		businessname,
		sector, 
		threeddesign, 
		advancedmanufacturing, 
		wearableiot, 
		digitalmedia, 
		videographicanimated, 
		mobileapplication, 
		byemail, 
		bytelephone) 
		values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	
//add the fields from the form into the params array for insertion without injection	
	$params = array(
		$data->{'uniqueid'},
		$data->{'name'},
		$data->{'email'}, 
		$data->{'phone'}, 
		$data->{'need'}, 
		$data->{'businessname'}, 
		$data->{'sector'}, 
		$data->{'3DDesign'}, 
		$data->{'AdvancedManufacturing'}, 
		$data->{'WearableIoT'}, 
		$data->{'DigitalMedia'},  
		$data->{'VideographicAnimated'}, 
		$data->{'MobileApplication'}, 
		$data->{'email_yes'}, 
		$data->{'telephone_yes'}
		);

		//connect to the mademillsql database on info@pd.team's Azure
		$serverName = "tcp:mademillsql.database.windows.net,1433";  
		$connectionOptions = array("Database"=>"mademillsql",  
		"Uid"=>"mademill", "PWD"=>"0pening20!6");  
		$conn = sqlsrv_connect($serverName, $connectionOptions);  

		$stmt = sqlsrv_query( $conn, $sql, $params);
		if( $stmt === false ) {
		echo  json_encode(sqlsrv_errors());
		}					
		sqlsrv_free_stmt($queryReview);  
		sqlsrv_close($conn);
			
			echo "Thank you ".$data->{'name'}.", your project has been submitted";
			
		}

?>

