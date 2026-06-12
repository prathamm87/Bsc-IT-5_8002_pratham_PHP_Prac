<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


echo "<h3>1. array_change_key_case()</h3>";
$arr = array("Name"=>"John", "CITY"=>"Rajkot", "Country"=>"India");
print_r(array_change_key_case($arr, CASE_LOWER));
echo "<br>";
print_r(array_change_key_case($arr, CASE_UPPER));


echo "<h3>2. array_chunk()</h3>";
$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
print_r(array_chunk($months, 3));



echo "<h3>3. array_count_values()</h3>";
$colors = array("Red","Blue","Red","Green","Blue","Red");
print_r(array_count_values($colors));



echo "<h3>4. array_combine()</h3>";
$keys = array("1","2","3");
$values = array("Apple","Banana","Mango");
$result = array_combine($keys, $values);
print_r($result);



echo "<h3>5. array_pop()</h3>";
$fruits = array("Apple","Banana","Mango","Orange");
array_pop($fruits);
print_r($fruits);



echo "<h3>6. array_push()</h3>";
$fruits = array("Apple","Banana");
array_push($fruits, "Mango", "Orange");
print_r($fruits);



echo "<h3>7. array_unshift()</h3>";
$fruits = array("Banana","Mango");
array_unshift($fruits, "Apple");
print_r($fruits);



echo "<h3>8. array_shift()</h3>";
$fruits = array("Apple","Banana","Mango");
array_shift($fruits);
print_r($fruits);

?>
</body>
</html>