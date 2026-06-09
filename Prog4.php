<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$month = date("n");

echo "Current Month Number: " . $month . "<br><br>";
echo "<b>Using if...else:</b><br>";

if ($month == 1)
    echo "January";
else if ($month == 2)
    echo "February";
else if ($month == 3)
    echo "March";
else if ($month == 4)
    echo "April";
else if ($month == 5)
    echo "May";
else if ($month == 6)
    echo "June";
else if ($month == 7)
    echo "July";
else if ($month == 8)
    echo "August";
else if ($month == 9)
    echo "September";
else if ($month == 10)
    echo "October";
else if ($month == 11)
    echo "November";
else
    echo "December";
echo "<br><br>";


?>
</body>
</html>