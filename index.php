<?php
$integer = 1;
$string = "Erika";
$bool = false; //1
$bool - true; // 0
$a = "Tekstas";
$a = 54254545;
$a = "54254545";
// Arrays
$array = [7,8,4,5,1,2];
$array = ["Erika", "ignas", "Tomas", 124578, 98745];
// Integers
$value = 99;
$value--;
$value += 100;
$value -= 10;
$value = $value / (8 + 7);
echo $value;
// String
$name = "Erika";
$surname = "Mik";
$fullName = $name . " " . $surname;
$fullName .= " dar papildomas tekstas";
echo $fullName;
// Boolean
$namas_dega = true;
if ($namas_dega) {
	echo "Gaisras!";
} else {
	echo "Viskas gerai.";
}
// Salygu trumpinys
echo $namas_dega ? "Gaisras!" : "Viskas gerai."; // auksciau esancio if'o trumpinys
// Array
$names = ["Petras", "Jonas", "Stasys", "Kazys"]; // vienamtis su tagais
echo $names[0]; // Petras
echo "<hr><h2>Arrays</h2><pre>";
$user_1 = [					// Asociatyvus masyvas
	"name" => "Petras", 
	"surname" => "Petrauskas",
	"age" => 55,
	"wight" => 80,
	"drinks" => ['beer', 'coffe', 'vater']
	];
$user_2 = [					// Asociatyvus masyvas
	"name" => "Jonas", 
	"surname" => "Jonaitis",
	"age" => 35,
	"wight" => 55
	];
$user_3 = [					// Asociatyvus masyvas
	"name" => "Kazys", 
	"surname" => "Kazlauskas",
	"age" => 70,
	"wight" => 77
	];

	echo $user_1 ["age"];
	print_r($surname);
	echo "<br>";
	
	var_dump($user_1);
	$users = [];
	$users = [$user_1, $user_2, $user_3];
	print_r($users);
	echo $users[2]["surname"]; //trecio masyvo elemento pavarde
	echo $users[0]['drinks'][0];
 
 // float - trupmeninis skaicius
	$kaina = 89;
	$kaina_su_pvm = getVatPrice($kaina, 0.18);
	function getVatPrice($price, $vat) {
		$vatPrice = $price * (1+$vat);
		return $vatPrice;
	}