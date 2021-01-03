<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <h2>Create a PHP Constant</h2>
    <?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
    <h2>***************</h2>
    <h2>PHP Constant Arrays</h2>
    <?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
    <h2>***************</h2>
</body>
</html>