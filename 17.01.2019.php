<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

<?php
if (strval(strpos($str,"<?")) != "")
	echo "Это php";
echo "<br/>";
?>
<?php
$str = "silence";
if (strpos($str,"silence") !== false)
	echo "Это пхп";
?>
<?php
for ($i=0, $x=0, $x< 20, $x++){
	for ($y=0; $y< 20; $y++){
		$chars [$x][$y] = array($i, chr($i));
		$i++;
	}

?>
<table border=1 cellpadding="=1 cellspacing=0">	
<?foreach ($chars as $row) {?>
<tr>
<?foreach ($row as $cell) {?>
<td>
<?=$cell[0]?>:
<b><tt><?=$cell[1]?></tt></b>
</td>
<?}?>
</tr>
<?}?>
</table>
<?php
$st = "Съешь еще этих     булок";
trim($st);
/*echo int strrpos ($st);*/
echo "<br/>";
?>


<?php
$first = "first string";
$second = "first";
$pos = strpos ($first, $second);
echo $pos;
echo "<br/>";
?>

<?php
$firstcmp = "CMP";
$secondcmp = "cmp";
if (strcmp($firstcmp, $secondcmp) !== 0) {
	echo "CMP";
}
?>

<?php 
echo "<br/>";
$firstcasecmp = "CMPca";
$secondcasecmp = "cmpcase";
$casecmp = strncasecmp($firstcasecmp,$secondcasecmp, 5);
if ($firstcasecmp==$secondcasecmp)
{
echo "$casecmp";
}
else {
echo "$casecmp";
}
 ?>

<?php
echo "<br/>";
$substr = substr("poison", 2);
echo "$substr";
?>

<?php 
echo "<br/>";
$str = "Drink rum, vine, poison";
$wrong = array("rum", "vine", "poison");
$true = array("juice", "water", "milk");
$strtrue = str_replace($wrong, $true, $str);
echo $strtrue;
?>

<?php 
echo "<br/>";
$str = "Drink rum, vine, poison";
$wrong = array("rum", "vine", "poison");
$true = array("JUICE", "WATER", "MILK");
$strtrue = str_replace($wrong, $true, $str);
echo $strtrue;
?>

<?php
echo "<br/>";
$substrreplace = "TIMELESS: /SPACE/";
echo "$substrreplace<hr />\n";
echo "<br/>";
echo substr_replace($substrreplace, "LowerThanLow", 0);
?>
<?php
echo "<br/>";
?>
</body>
</html>