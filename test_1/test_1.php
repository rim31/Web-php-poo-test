<?php
function ft_strrev($str)
{
	$len = 0;
	while($str[$len])
		$len++;
		
	while($len >= 0)
	{
		echo $str[$len];
		$len--;
	}
}

ft_strrev("abcde");
// echo "\n";

 ?>
