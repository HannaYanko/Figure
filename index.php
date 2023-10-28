<?php
include 'Shape.php';
include 'Circle.php';
include 'Rectangle.php';
include 'Square.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['shape'])) {
        $color = $_POST['color'];
        if ($_POST['shape'] == 'square') {
            $side = $_POST['side'];
            $square = new Square($color, $side);
            echo $square->draw();
            echo "<p>Площа: " . $square->getArea() . "</p>";
            echo "<p>Периметр: " . $square->getPerimeter() . "</p>";
        } elseif ($_POST['shape'] == 'rectangle') {
            $width = $_POST['width'];
            $height = $_POST['height'];
            $rectangle = new Rectangle($color, $width, $height);
            echo $rectangle->draw();
            echo "<p>Площа: " . $rectangle->getArea() . "</p>";
            echo "<p>Периметр: " . $rectangle->getPerimeter() . "</p>";
        } elseif ($_POST['shape'] == 'circle') {
            $radius = $_POST['radius'];
            $circle = new Circle($color, $radius);
            echo $circle->draw();
            echo "<p>Площа: " . $circle->getArea() . "</p>";
            echo "<p>Периметр: " . $circle->getPerimeter() . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Малювання фігур</title>
</head>
<body>
<h2>Квадрат</h2>
<form action="index.php" method="post">
    <label for="square_side">Сторона:</label>
    <input type="text" id="side" name="side">
    <label for="square_color">Колір:</label>
    <input type="text" id="square_color" name="color">
    <div style='width: 50px; height: 50px; background-color: #000000;'></div>
    <input type="hidden" name="shape" value="square">
    <input type="submit" value="Намалювати">
</form>

<h2>Прямокутник</h2>
<form action="index.php" method="post">
    <label for="rectangle_width">Ширина:</label>
    <input type="text" id="width" name="width">
    <label for="rectangle_height">Висота:</label>
    <input type="text" id="height" name="height">
    <label for="rectangle_color">Колір:</label>
    <input type="text" id="rectangle_color" name="color">
    <div style='width: 100px; height: 50px; background-color: #000000;'></div>
    <input type="hidden" name="shape" value="rectangle">
    <input type="submit" value="Намалювати">
</form>

<h2>Коло</h2>
<form action="index.php" method="post">
    <label for="circle_radius">Радіус:</label>
    <input type="text" id="radius" name="radius">
    <label for="circle_color">Колір:</label>
    <input type="text" id="circle_color" name="color">
    <div style="width: 100px; height: 100px; background-color: #000000; border-radius: 50%;"></div>
    <input type="hidden" name="shape" value="circle">
    <input type="submit" value="Намалювати">
</form>
</body>
</html>
