
<?php
//Update the dotr_presence table on joining the page

	$geoip = file_get_contents("http://freegeoip.net/json/".$_SERVER['REMOTE_ADDR']);
	$geoip_json = json_decode($geoip);
	
//{"ip":"24.114.106.140","country_code":"CA","country_name":"Canada","region_code":"QC","region_name":"Quebec","city":"","zip_code":"","time_zone":"America/Toronto","latitude":45.5,"longitude":-73.5833,"metro_code":0}
	
	$sql = "
	BEGIN
		IF NOT EXISTS (select uniqueid from dbo.dotr_presence where uniqueid = '".$dbvalues["uniqueid"]."')
		BEGIN	
			   INSERT INTO dbo.dotr_presence (domain, uniqueid, focus, lastpresence, donotdisturb, longitude, latitude, country, city, ip)
			   VALUES ('".$_SERVER["SERVER_NAME"]."','".$dbvalues["uniqueid"]."','true','".$currentdatestring."','0', ".$geoip_json->longitude.",".$geoip_json->latitude." ,  '".$geoip_json->{'country_name'}."',  '".$geoip_json->city."',  '".$geoip_json->ip."')
		END
		ELSE
		BEGIN
			UPDATE dbo.dotr_presence
			SET domain = '".$_SERVER["SERVER_NAME"]."',focus = 'true',lastpresence = '".$currentdatestring."'
			WHERE uniqueid = '".$dbvalues["uniqueid"]."'
		END  
	END		   
	";


		try  
		{  
			$serverName = "tcp:mademillsql.database.windows.net,1433";  
			$connectionOptions = array("Database"=>"mademillsql",  
				"Uid"=>"mademill", "PWD"=>"0pening20!6");  
				$conn = sqlsrv_connect($serverName, $connectionOptions);  
			$queryReview = sqlsrv_query($conn, $sql); 
			sqlsrv_free_stmt($queryReview);  
			sqlsrv_close($conn);
		}  
		catch(Exception $e)  
		{  
			echo("Error!");  
		}
	
		
?>