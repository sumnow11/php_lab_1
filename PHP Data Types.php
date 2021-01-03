<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <h2> PHP String </h2>
    <?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
    <h2>***************</h2>

    <h2>PHP Integer</h2>
    <?php
$x = 5985;
var_dump($x);
?>
    <h2>***************</h2>
    <h2>PHP Float</h2>
    <?php
    $x = 10.365;
    var_dump($x);
    ?>
    <h2>***************</h2>
    <h2>PHP Array</h2>
    <?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
    <h2>***************</h2>
    <h2>PHP Object</h2>
    <?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
    <h2>***************</h2>
    <h2>PHP NULL Value</h2>
    <?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
    <h2>***************</h2>
</body>
</html>