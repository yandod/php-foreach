<?php
$list = array('春','夏','秋','冬');

$i = 0;
while ( isset($list[$i]) ) {
	echo "$i = $list[$i]";
	echo "\n";
	$i++;
}