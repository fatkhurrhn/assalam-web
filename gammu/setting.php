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
	$open = fopen("smsdrc","w+"); 
	$text = $_POST['update']; 
	fwrite($open, $text); 
	fclose($open); 
	echo "File updated.<br />";  	
	$file = file("smsdrc");
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
					<li><b>user</b> : (Isikan dengan <b>root</b>)</li>
					<li><b>pc</b> : (Isikan dengan <b>localhost</b>)</li>
					<li><b>password</b> : (Kosongkan)</li>
					<li><b>database</b> : (Isikan dengan <b>dbs_absence</b>)</li>
				</ul>
				&nbsp;&nbsp;&nbsp;<input id='tombolAdd' name="Submit" type="submit" value="Update" />
			</td>
		</tr>		
	</table> 	
	<br><br>		
	</form>
<?php
}else{ 
	$file = file("smsdrc");
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
					<li><b>user</b> : (Isikan dengan <b>root</b>)</li>
					<li><b>pc</b> : (Isikan dengan <b>localhost</b>)</li>
					<li><b>password</b> : (Kosongkan)</li>
					<li><b>database</b> : (Isikan dengan <b>dbs_absence</b>)</li>
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