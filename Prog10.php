<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array1 = [];
$array2 = [];

if (isset($_POST['submit'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    // Take values for first array
    for ($i = 0; $i < $n1; $i++) {
        $array1[] = $_POST["a1$i"];
    }

    // Take values for second array
    for ($i = 0; $i < $n2; $i++) {
        $array2[] = $_POST["a2$i"];
    }

    // Merge both arrays
    $merged = array_merge($array1, $array2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Merge Two Arrays</title>
</head>
<body>

<h2>Merge Two Arrays (User Input)</h2>

<form method="post">

    <h3>Array 1</h3>
    Size:
    <input type="number" name="n1" required>
    <br><br>

    <h3>Array 2</h3>
    Size:
    <input type="number" name="n2" required>
    <br><br>

    <?php
    if (isset($_POST['n1']) && isset($_POST['n2']) && !isset($_POST['submit'])) {

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        echo "<h3>Enter values for Array 1</h3>";
        for ($i = 0; $i < $n1; $i++) {
            echo "Value " . ($i + 1) . ": ";
            echo "<input type='text' name='a1$i' required><br><br>";
        }

        echo "<h3>Enter values for Array 2</h3>";
        for ($i = 0; $i < $n2; $i++) {
            echo "Value " . ($i + 1) . ": ";
            echo "<input type='text' name='a2$i' required><br><br>";
        }

        echo "<input type='submit' name='submit' value='Merge Arrays'>";
    } else {
        echo "<input type='submit' value='Continue'>";
    }
    ?>

</form>

<?php
// Show result
if (isset($_POST['submit'])) {
    echo "<h3>Merged Array is:</h3>";

    foreach ($merged as $value) {
        echo $value . "<br>";
    }
}
?>

</body>
</html>
</body>
</html>