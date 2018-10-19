<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table">
	<tr><th>Radius<th><th>Area</th></tr>
	<?php
	for ($i=1; $i < 11; $i++) { 
		echo "<tr><td>" . $i . "</td><td>" . getArea($i) . "</td></tr>";
	} ?>
</table>
</body>
</html>

<?php
	$names = ['Ignas', 'Tomas', 'Jonas'];
	foreach ($names as $name) {
	echo $name . "<br>";
} ?>



<!-- <?php
// $r = 5;
// $area = getArea($r);
// echo $area;
function getArea($r) {
		return round($r**2 * pi(), 2);
} ?> -->


<?php
$pl = 30;
$h = 200;
$w = 300;
$l = 500;

function getArea($h, $w, $l) {
		return round(($h * $w) * 2 + ($h * $l) * 2 + ($h * $w));
} ?>

