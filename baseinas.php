<?php

// $pl = 30;
// $h = 200;
// $w = 300;
// $l = 500;

function getArea($h, $w, $l) {
		return $pool = round(($h * $w) * 2 + ($h * $l) * 2 + ($h * $w)) . "<br>";
}

function gettile($tile) {
		return $tile = round($tile**2);
}

function getCount($pool, $tile) {
		return $count = $pool / $tile;
}
echo getArea(200,300,500);
echo getTile(33);
echo getCount($pool, $tile);