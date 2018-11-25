
<?php
//Update the dotr_presence table on joining the page
	$sql = "
	BEGIN
		IF NOT EXISTS (select uniqueid from dbo.dotr_presence where uniqueid = '".$dbvalues["uniqueid"]."')
		BEGIN	
			   INSERT INTO dbo.dotr_presence (domain, uniqueid, online, lastpresence, donotdisturb)
			   VALUES ('".$_SERVER["SERVER_NAME"]."','".$dbvalues["uniqueid"]."','1','".$currentdatestring."','0')
		END
		ELSE
		BEGIN
			UPDATE dbo.dotr_presence
			SET domain = '".$_SERVER["SERVER_NAME"]."',online = 'true',lastpresence = '".$currentdatestring."'
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