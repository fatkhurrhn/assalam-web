<?php
include "menu.php";
echo "<hr>";
?>

<html>  
 <head>  
 <title> PHP Tutorial </title>                 
 </head>  
 <body>   
<?php
if($_POST['Submit']){ 
	$open = fopen("smsdrc","w+"); 
	$text = $_POST['update']; 
	fwrite($open, $text); 
	fclose($open); 
	echo "File updated.<br />";  	
	$file = file("smsdrc"); 
	echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
	echo "<textarea Name=\"update\" cols=\"50\" rows=\"10\">"; 
	foreach($file as $text) { 
		echo $text; 
	}  
	echo "</textarea>"; 
	echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n 
	</form>"; 
}else{ 
	$file = file("smsdrc"); 
	echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
	echo "<textarea Name=\"update\" cols=\"50\" rows=\"10\">"; 
	foreach($file as $text) { 
		echo $text; 
	}  
	echo "</textarea>"; 
	echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n 
	</form>"; 
} 
?> 