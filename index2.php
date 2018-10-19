<!DOCTYPE html>
<html>
<head>
	<title>Pirma PHP pamoka | <?php ..... ?></title>
</head>
<body>
	<h1>Pirma PHP pamoka</h1>
	<?php	
	echo "Šis tekstas yra iš PHP.<br>";
	echo date("Y-m-d H:i:s");
	?>
	<h2>Dar kažkokia info</h2>
	<?php 
	echo rand(100, 99999999);
	 ?>
</body>
</html>


<?php 
echo "Šis tekstas yra iš PHP.<br>"; ?> 
<?= "Šis tekstas yra iš PHP.<br>"; ?> 