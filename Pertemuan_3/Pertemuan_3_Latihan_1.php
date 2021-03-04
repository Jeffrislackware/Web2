<?php
	$ball = 'purple';
	//Coba Ubah Ke "Yellow", "Blue", "Green", "Purple", Atau Warna Lain
	if ($ball == 'red') {
		$redbox = $ball;
	} elseif ($ball == 'yellow') {
		$yellowbox = $ball;
	} elseif ($ball == 'blue') {
		$bluebox = $ball;
	} elseif ($ball == 'green') {
		$greenbox = $ball;
	} elseif ($ball == 'purple') {
	$purplebox = $ball;
	} else {
		$colorlessbox = $ball;
	}
	echo "Red Box : $redbox <br>\n";
	echo "Yellow Box : $yellowbox <br>\n";
	echo "Blue Box : $bluebox <br>\n";
	echo "Green Box : $greenbox <br>\n";
	echo "Purple Box : $purplebox <br>\n";
	echo "Colorless Box : $colorlessbox <br>\n";
?>