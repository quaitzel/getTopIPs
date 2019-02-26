<?php
	$ips = file_get_contents('ip.txt');
	
	preg_match_all('/([0-9]{1,3}\.){3}[0-9]{1,3}/', $ips, $matches);
	$my_array_values = array_count_values($matches[0]);
	
	$i = 0;
	while (list ($key, $val) = each($my_array_values)) {
		$out[$i][val] = $val;
		$out[$i][key] = $key;
		$i++;
	}
	rsort($out);
?>

<table border="1" style="width:230px;text-align:left;">
	<tr>
		<th>Count</th>
		<th>IP</th>
	</tr>
	<?php
		$j = 0;
		while ($j < 10) {
			echo "<tr><td>" . $out[$j][val] . "</td><td>" . $out[$j][key] . "</td></tr>";
			$j++;
		}
	?>
</table>