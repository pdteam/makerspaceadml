

<?php
$serverName = "mademillsql.database.windows.net"; //serverName\instanceName
$connectionInfo = array( "Database"=>"mademillsql", "UID"=>"mademill", "PWD"=>"0pening20!6");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
//Server: mademillsql.database.windows.net,1433 \r\nSQL Database: mademillsql\r\nUser Name: mademill\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:mademillsql.database.windows.net,1433; Database = mademillsql\", \"mademill\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"mademill@mademillsql\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"mademillsql\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:mademillsql.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

?>


