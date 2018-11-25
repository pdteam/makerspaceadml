
<?php
//Update the dotr_presence table on joining the page

if(isset($_PUSH["uniqueid"]))
{
	$sql = "UPDATE dbo.dotr_presence SET nickname = ? WHERE uniqueid = ?";
	$params = array($_PUSH["nickname"], $_PUSH["uniqueid"]);
	try  
	{  
		$serverName = "tcp:mademillsql.database.windows.net,1433";  
		$connectionOptions = array("Database"=>"mademillsql",  
			"Uid"=>"mademill", "PWD"=>"0pening20!6");  
			$conn = sqlsrv_connect($serverName, $connectionOptions);  
		$queryReview = sqlsrv_query($conn, $sql, $params); 
		sqlsrv_free_stmt($queryReview);  
		sqlsrv_close($conn);
	}  
	catch(Exception $e)  
	{  
		echo("Error!");  
	}
}
		
?>