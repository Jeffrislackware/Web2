<?php
	$A = 123 ; // Variable Global
	function Test() {
		$A = "Test"; // Variable Local
		echo "Nilai A Dalam Fungsi = $A \n";
	}
	Test();
	echo"Nilai A Luar Fungsi = $A \n";
?>