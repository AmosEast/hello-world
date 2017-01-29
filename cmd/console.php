<?php
	echo '命令行参数个数：'.$argc."\n";
	echo "命令行参数：\n";
	foreach($argv as $index => $arg)
		echo "{$index}:{$arg}\n";
?>
