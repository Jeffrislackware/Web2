<?php
	$i = 0;
	echo 'This Code Will Run At Least Once Because I Default Value Is 0.<br>';
	do {
		echo 'I Value Is ' . $i . ', So Code Block Will Run. <br>';
		++$i;
	}
	while ($i< 10);
?>