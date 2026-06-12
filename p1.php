<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$days = array(
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
);

echo "<h3>Numeric Array - Days</h3>";
print_r($days);



$months = array(
    "January"   => 31,
    "February"  => 28,
    "March"     => 31,
    "April"     => 30,
    "May"       => 31,
    "June"      => 30,
    "July"      => 31,
    "August"    => 31,
    "September" => 30,
    "October"   => 31,
    "November"  => 30,
    "December"  => 31
);

echo "<h3>Associative Array - Months and Days</h3>";
print_r($months);



$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

echo "<h3>Multidimensional Array - Laptops</h3>";
print_r($laptops);

?>
</body>
</html>