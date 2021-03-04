<?php
	$A = 123 ; // Variable Global
	function Test() {
		global $A ; // Variable Local
		echo "Nilai A Dalam Fungsi = $A \n";
	}
	Test();
	echo "Nilai A Luar Fungsi = $A \n";
?>