<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if...else...elseif</title>
</head>
<body>
    <h2>PHP - The if Statement</h2>
    <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
    <h2>***************</h2>
    <h2>PHP - The if...else Statement</h2>
    <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
    <h2>***************</h2>
    <h2>PHP - The if...elseif...else Statement</h2>
    <?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
    <h2>***************</h2>
</body>
</html>