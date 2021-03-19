<?php
	function repeat($text, $num = 10){
		echo "<ol>\r\n";
		for($i = 0; $i < $num; $i++){
			echo "<li>$text </li>\r\n";
		}
		echo "</ol>";
	}
	// Calling Repeat With Two Arguments
	repeat("I'm the best", 15);
	// Calling Repeat With Just One Argument
	repeat("You're the man");
?>