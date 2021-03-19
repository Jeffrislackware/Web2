<?php
	$file = fopen("ReadMe.txt","r");
	echo fgets($file);
	fclose($file);
?>