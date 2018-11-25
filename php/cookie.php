
<?php
	//cookie name based on server name. ie. pd.team
	$cookiename = str_replace(".","_",$_SERVER["SERVER_NAME"])."dotr";

	//cookie expiry
	$number_of_days = 30 ;
	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;

	//http referrer
	$httpref="";
	if(isset($_SERVER['HTTP_REFERER'])) {$httpref= $_SERVER['HTTP_REFERER'];}	

	//current date, formatted to Eastern Time
	date_default_timezone_set("America/Toronto");
	$currentdate = new DateTime(date("Y/m/d, h:i:sa"), new DateTimeZone('America/Toronto'));
	$currentdatestring = $currentdate->format('Y-m-d H:i:s');

	$uniqueid = "";
	
	//create an array for the values;
	$dbvalues= array();
	$cookieinfo = array();
	if(!isset($_COOKIE[$cookiename])) //no cookie set - first time visitor
	{
		$uniqueid = uniqid();
		$cookieinfo=array('uniqueid' => $uniqueid , 'times' => $currentdatestring, 'ips' => $_SERVER['REMOTE_ADDR'], 'referrers' => $httpref);
		setcookie( $cookiename, json_encode($cookieinfo), $date_of_expiry );
		$dbvalues = $cookieinfo;
	}
	else //repeated visitor
	{
		$cookieinfo = json_decode($_COOKIE[$cookiename]);
		$uniqueid = $cookieinfo->uniqueid;
		$updatedcookieinfo=array('uniqueid' => $cookieinfo->uniqueid, 'times' => $cookieinfo->times."_/_".$currentdatestring, 'ips' => $cookieinfo->ips."_/_".$_SERVER['REMOTE_ADDR'], 'referrers' => $cookieinfo->referrers."_/_".$httpref);
		setcookie($cookiename, json_encode($updatedcookieinfo), $date_of_expiry );
		$dbvalues=$updatedcookieinfo;
	}

//create a query to input or update the DOTR table depending on whether the uniqueid is already logged.  DOTR is 'DOmain TRacker"
	$sql = "
	BEGIN
		IF NOT EXISTS (select uniqueid from dbo.dotr where uniqueid = '".$dbvalues["uniqueid"]."')
		BEGIN	
			   INSERT INTO dbo.dotr (domain, uniqueid, times, ips, referrers)
			   VALUES ('".$_SERVER["SERVER_NAME"]."','".$dbvalues["uniqueid"]."','".$dbvalues["times"]."','".$dbvalues["ips"]."','".$dbvalues["referrers"]."')
		END
		ELSE
		BEGIN
			UPDATE dbo.dotr
			SET times = '".$dbvalues["times"]."',ips = '".$dbvalues["ips"]."',referrers = '".$dbvalues["referrers"]."'
			WHERE uniqueid = '".$dbvalues["uniqueid"]."'
		END  
	END		   
	";

//run the query	
	querysqlsvr($sql);

//standard sqlsvr connection template for Microsoft Azure
	function querysqlsvr($tsql)  
	{  
		//echo "connection started";
		try  
		{  
			$serverName = "tcp:mademillsql.database.windows.net,1433";  
			$connectionOptions = array("Database"=>"mademillsql",  
				"Uid"=>"mademill", "PWD"=>"0pening20!6");  
				$conn = sqlsrv_connect($serverName, $connectionOptions);  
			$queryReview = sqlsrv_query($conn, $tsql); 
			sqlsrv_free_stmt($queryReview);  
			sqlsrv_close($conn);
		}  
		catch(Exception $e)  
		{  
			echo("Error!");  
		}
		//echo "connection ended";
	}  	
		
?>