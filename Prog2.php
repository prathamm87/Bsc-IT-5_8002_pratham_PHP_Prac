<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers = array(10, 25, 5, 40, 15);

$min = min($numbers);
$max = max($numbers);

echo "Minimum number: " . $min . "<br>";
echo "Maximum number: " . $max;
?>
</body>
</html>