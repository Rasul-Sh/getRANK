<meta charset="utf-8" />
<?php
//read data from alexa
$xml_alexa_loaded=simplexml_load_file("http://data.alexa.com/data?cli=10&dat=snbamz&url=http://pr0grammers.ir");
// extract data from XML output/
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<table>
			<tr>
				<td><?php echo "HOST :" ; ?></td>
				<td><?php echo (string)$xml_alexa_loaded->SD[0]->attributes()->HOST; ?></td>
			</tr>
			<tr>
				<td><?php echo "URL  :";?></td>
				<td><?php echo $xml_alexa_loaded->SD[1]->POPULARITY->attributes()->URL; ?></td>
			</tr>
			<tr>
				<td><?php echo "World Rank  :"; ?></td>
				<td><?php echo $xml_alexa_loaded->SD[1]->REACH->attributes()->RANK; ?></td>
			</tr>
			<tr>
				<td><?php echo "Local Rank  :"; ?></td>
				<td><?php echo $xml_alexa_loaded->SD[1]->COUNTRY->attributes()->RANK; ?></td>
			</tr>
			<tr>
				<td><?php echo "Country :"; ?></td>
				<td><?php echo $xml_alexa_loaded->SD[1]->COUNTRY->attributes()->NAME; ?></td>
			</tr>
		</table>

</body>
</html>