<?php
include "menu.php";
echo "<hr>";
?>

<html>  
 <head>  
 <title> Setting SMS Gateway</title>                 
 </head>  
 <body>   
<?php
if($_POST['Submit']){ 
	$open = fopen("gammurc","w+"); 
	$text = $_POST['update']; 
	fwrite($open, $text); 
	fclose($open); 
	echo "File updated.<br />";  	
	$file = file("gammurc");
	echo "<form action='".$PHP_SELF."' method='post'>"; 
	?>
	<table width="100%" border="0">
		<tr>
			<td width="50%">
				<textarea name="update" cols="92" rows="20">
					<?php 
					foreach($file as $text) { 
						echo $text; 
					}
					?>
				</textarea>
			</td>
			<td valign="top">
				Item yg harus diubah:
				<ul>
					<li><b>port</b> : (isikan dg nomor port modem anda, cek di control panel-phone and modem, misal:<b>com4</b>)</li>
					<li><b>connection</b> : (Pilih jenis connection hp/modem Anda. misal modem Wavecom = <b>at115200</b>)</li>					
				</ul>
				&nbsp;&nbsp;&nbsp;<input id='tombolAdd' name="Submit" type="submit" value="Update" />
			</td>
		</tr>		
	</table> 	
	<br><br>		
	</form>
<?php
}else{ 
	$file = file("gammurc");
	echo "<form action='".$PHP_SELF."' method='post'>"; 
	?>
	<table width="100%" border="0">
		<tr>
			<td width="50%">
				<textarea name="update" cols="92" rows="20">
					<?php 
					foreach($file as $text) { 
						echo $text; 
					}
					?>
				</textarea>
			</td>
			<td valign="top">
				Item yg harus diubah:
				<ul>
					<li><b>port</b> : (isikan dg nomor port modem anda, cek di control panel-phone and modem, misal:<b>com4</b>)</li>
					<li><b>connection</b> : (Pilih jenis connection hp/modem Anda. misal modem Wavecom = <b>at115200</b>)</li>					
				</ul>
				&nbsp;&nbsp;&nbsp;<input id='tombolAdd' name="Submit" type="submit" value="Update" />
			</td>
		</tr>		
	</table> 	
	<br><br>		
	</form>
<?php 
} 
?> 