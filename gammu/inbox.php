<?php
include "../db.php";

include "../f.php";
$number                =$_GET["number"];
$TextDecoded                =$_GET["text"];
$modem                =$_GET["modem"];
$SenderNumber          = zeroto62($number);
$UpdatedInDB = $datetime;
$ReceivingDateTime = $datetime;
$processed = "false";


	 $kon = mysql_connect($site["dbhost"], $site["dblogin"], $site["dbpass"], $site["dbname"], $site["dbport"]);
mysql_select_db($site["dbname"]);	

	if($number){
		$sound = "0";
		$processed = "0";

    $sql="insert into inbox

        ( ReceivingDateTime,Text,SenderNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,RecipientID,Processed )
        Values
        ( '$ReceivingDateTime','$Text','$SenderNumber','$Coding','$UDH','$SMSCNumber','$Class','$TextDecoded','$ID','$RecipientID','$Processed' )";

    mysql_query($sql);       
	 }
	 

?>

