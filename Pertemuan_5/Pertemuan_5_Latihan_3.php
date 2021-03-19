<?php
	$file = fopen("ReadMe.txt","r");
		while(! feof($file)){
			echo fgets($file). "<br />";
		}
	fclose($file);
?>