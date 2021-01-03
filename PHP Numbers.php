<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>
    <h2>PHP Integers</h2>
    <?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
    <h2>***************</h2>
    <h2>PHP Floats</h2>
    <?php
$x = 10.365;
var_dump(is_float($x));
?>
    <h2>***************</h2>
    <h2>PHP Infinity</h2>
    <?php
$x = 1.9e411;
var_dump($x);
?>
    <h2>***************</h2>
    <h2>PHP NaN</h2>
    <?php
$x = acos(8);
var_dump($x);
?>
    <h2>***************</h2>
    <h2>PHP Numerical Strings</h2>
    <?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
    <h2>***************</h2>
    <h2>PHP Casting Strings and Floats to Integers</h2>
    <?php

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";


$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
    <h2>***************</h2>
</body>
</html>