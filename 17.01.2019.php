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
for ($i=0, $x=0; $x<20; $x++){
	for ($y=0; $y<20; $y++){
		$chars [$x][$y] = array($i, chr($i));
		$i++;
	}
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
$pos =($first, $second);
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


<?php  
$locale = setlocale(LC_ALL,'ru_RU.CP1251');
echo $locale;
?>
<?php
$strfir = "Поделились на команды";
$str = convert_cyr_string($strfir, w, m);
echo $str;
?>

<?php
echo "<br/>";
$discussion = "game";
printf ('Let`s start our %d', $discussion);
?>

<?php
echo "<br/>";
$str = "Вчера было %g января";
echo sprintf($str, 17);
?>
<?php
echo "<br/>";
echo nl2br("Чемпион суперкубка Италии\n Ювентус");
?>
<?php
echo "<br/>";
$text = "London is a capital city of Great Britain";
$phrase = wordwrap($text, 25, "<br />\n" );
echo $phrase;
?>
<?php 
echo "<br/>";
$str = '<p>1917</p>';
echo strip_tags($str);
echo strip_tags($str,'<p>')
 ?>
 <?php
$text = pack("acs*", 0x1234, 0x5678, 65, 66);
?>
<?php
echo "<br/>";
$unp = "\x04\x00\xa0\x00";
$unpack = unpack("cchars/nint", $unp);
print_r($inpack);
?>
<?php
echo "<br/>";
$text = 'кубок';
md5($text);
$textcrc = crc32 ($text);
echo $textcrc;
$cryptonit = crypt($text);
?>

<?php
echo "<br/>";
$things = array('a' => "pen", "b" => "backpack", "c" => "textbook");
asort ($things);
foreach ($things as $key => $val) {
	echo "$key = $val\n";
}
?>

<?php
echo "<br/>";
$things = array("c" => "textbook", "b" => "backpack", 'a' => "pen");
arsort ($things);
foreach ($things as $key => $val) {
	echo "$key = $val\n";
}
?>
<?php
echo "<br/>";
$things = array("c" => "textbook", "b" => "backpack", 'a' => "pen");
ksort ($things);
foreach ($things as $key => $val) {
	echo "$key = $val\n";
}
?>
<?php
echo "<br/>";
$things = array("c" => "textbook", "b" => "backpack", 'a' => "pen");
krsort ($things);
foreach ($things as $key => $val) {
	echo "$key = $val\n";
}
?>

<?php
echo "<br/>";
function lcp($dimension,$verse)
{
	$dimension = preg_replace('@^(a|an|the|for) @','', $dimension);
	$verse = preg_replace('@^(a|an|the|for) @','', $verse);
	return strcasecmp($dimension, $verse);
}
$dimension = array('for us' => 7 ,'a rogue' => 8, 'the castle' => 4, 'an oreo' => 5);
uksort($dimension, "lcp");
foreach ($dimension as $key => $value) {
	echo "$key: $value\n";
}
?>

<?php
echo "<br/>";
function cmp ($dimension,$verse){
	if ($dimension == $verse) {
		return 0;
	}
	return ($dimension < $verse) ? -1 : 1;
}
$dimension = array('a' => 7 ,'c' => 8, 't' => -4, 'f' => -5);
uasort($dimension, "cmp");
print_r($dimension);
?>

<?php
echo "<br/>";
$some = array('yellow card', array("black", "blue"));
$reverse = array_reverse($some);
$tower = array_reverse($some, true);
print_r($some);
echo "<br/>";
print_r($reverse);
echo "<br/>";
print_r($tower);
echo "<br/>";
?>

<?php
$theme = $theme1 = array("pic5.jpg", "pic34.jpg", "pic1.jpg", "pic95.jpg");
asort($theme);
echo "sort:\n";
print_r($theme);
echo "<br/>";
natsort($theme1);
echo "\nNatural:\n";
print_r($theme1);
?>

<?php
echo "<br/>";
$theme = $theme1 = array("pIc5.jpg", "Pic34.jpg", "piC1.jpg", "PIC95.jpg");
asort($theme);
echo "sort:\n";
print_r($theme);
echo "<br/>";
natsort($theme1);
echo "\nNatural:\n";
print_r($theme1);
?>

<?php
echo "<br/>";
$things = array("book", "shelf", "table");
sort($things);
foreach ($things as $key => $value) {
	echo "things[" . $key ."] = " . $value . "\n";
}
?>
<?php
echo "<br/>";
$things = array("book", "shelf", "table");
rsort($things);
foreach ($things as $key => $value) {
	echo "things[" . $key ."] = " . $value . "\n";
}
?>
<!-- <?php
/*echo "<br/>";
function cmp ($dimension,$verse){
	if ($dimension == $verse) {
		return 0;
	}
	return ($dimension < $verse) ? -1 : 1;
}
$dimension = array(5, 8, 2, 7, 3);
usort($dimension, "cmp");
foreach ($dimension as $key => $value) {
 echo "$key: $value\n";*/
/*}*/
?> -->

<?php
echo "<br/>";
$digital = range(1,20);
shuffle($digital);
foreach ($digital as $digital) {
	echo "$digital";
}
?>

<?php
echo "<br/>";
$stamford = array("Brooklyn", "Manhattan", "Queens");
$flip = array_flip($stamford);
print_r($flip);
?>

<?php
echo "<br/>";
$mem = array(0 => 100, "color" => "pink");
print_r(array_keys($mem));
echo "<br/>";
$mem = array("purple", "orange", "brown", "purple");
print_r(array_keys($mem, "purple"));
echo "<br/>";
$mem = array("color" => array("purple", "orange", "brown"),
			 "size" => array ("small", "megium","huge"));
print_r(array_keys($mem));
?>

<?php
echo "<br/>";
$bridge = array("size" => "huge", "color" => "black");
print_r(array_values($bridge));
?>

<?php
echo "<br/>";
$tv = array("Netflix", "Youtube", "Twitch", "Amazon");
if (in_array("Netflix", $tv)) {
	echo "Не наступил в Netflix";
}
echo "<br/>";
if (in_array("Youtube", $tv)) {
	echo "like";
}
?>

<?php
echo "<br/>";
$mind = array(5, "how low", 5, "spirit", "how low");
print_r(array_count_values($mind));
?>

<?php
echo "<br/>";
$moon = array("color" => "red", 6, 8);
$blood = array("c", "j", "suit" => "black", "shape" => "trapezoid", 7);
$bloodmoon = array_merge($moon, $blood);
print_r($bloodmoon);
?>

<?php
echo "<br/>";
$tribunal = array("b", "a", "d", "p");
$cathedral = array_slice($tribunal, 2);
$cathedral = array_slice($tribunal, -2, 3);
$cathedral = array_slice($tribunal, 0, 4);
print_r(array_slice($tribunal, 2, -3));
echo "<br/>";
print_r(array_slice($tribunal, 2, -1, true));
?>

<?php
?>
</body>
</html>