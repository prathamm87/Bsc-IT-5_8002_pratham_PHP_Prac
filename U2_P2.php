<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting</title>
</head>
<body>

<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="numbers" required>
    <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["numbers"];

    // Convert string to array
    $array = explode(",", $input);

    // Remove extra spaces
    $array = array_map('trim', $array);

    // Ascending order
    $asc = $array;
    sort($asc);

    // Descending order
    $desc = $array;
    rsort($desc);

    echo "<h3>Original Array:</h3>";
    echo implode(", ", $array);

    echo "<h3>Ascending Order:</h3>";
    echo implode(", ", $asc);

    echo "<h3>Descending Order:</h3>";
    echo implode(", ", $desc);
}
?>

</body>
</html>
</body>
</html>