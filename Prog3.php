<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$a = 10;
$b = 5;

echo "<h2>PHP Operators Demo</h2>";

echo "<h3>1. Arithmetic Operators</h3>";
echo "Addition (10 + 5) = " . ($a + $b) . "<br>";
echo "Subtraction (10 - 5) = " . ($a - $b) . "<br>";
echo "Multiplication (10 * 5) = " . ($a * $b) . "<br>";
echo "Division (10 / 5) = " . ($a / $b) . "<br>";
echo "Modulus (10 % 5) = " . ($a % $b) . "<br>";

echo "<h3>2. Assignment Operator</h3>";
$c = $a;
echo "Value of c = $c<br>";
$c += $b;
echo "After c += b, c = $c<br>";

echo "<h3>3. Comparison Operators</h3>";
echo "Is a equal to b? ";
echo ($a == $b) ? "Yes" : "No";
echo "<br>";

echo "Is a greater than b? ";
echo ($a > $b) ? "Yes" : "No";
echo "<br>";

echo "<h3>4. Logical Operators</h3>";
echo "Are both a and b positive numbers? ";
echo ($a > 0 && $b > 0) ? "Yes" : "No";
echo "<br>";

echo "<h3>5. Increment and Decrement</h3>";
$d = 10;
echo "Original value of d = $d<br>";
$d++;
echo "After increment, d = $d<br>";
$d--;
echo "After decrement, d = $d<br>";

echo "<h3>6. String Operator</h3>";
$name = "Hello";
$word = "World";
echo $name . " " . $word . "<br>";

echo "<h3>7. Ternary Operator</h3>";
echo ($a > $b) ? "a is greater than b" : "b is greater than a";

?>
</body>
</html>