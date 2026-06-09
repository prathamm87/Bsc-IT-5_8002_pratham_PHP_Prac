<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arr = [];

if (isset($_POST['submit'])) {
    $n = $_POST['n'];

    // Store user input in array
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = $_POST["num$i"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<h2>Reverse Array Values</h2>

<form method="post">
    Enter number of elements:
    <input type="number" name="n" required>
    <br><br>

    <?php
    // Create input fields dynamically
    if (isset($_POST['n']) && !isset($_POST['submit'])) {
        $n = $_POST['n'];

        for ($i = 0; $i < $n; $i++) {
            echo "Element " . ($i + 1) . ": ";
            echo "<input type='text' name='num$i' required><br><br>";
        }

        echo "<input type='submit' name='submit' value='Reverse'>";
    } else {
        echo "<input type='submit' value='Next'>";
    }
    ?>
</form>

<?php
// Display reversed array
if (isset($_POST['submit'])) {
    echo "<h3>Reversed Array:</h3>";

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        echo $arr[$i] . "<br>";
    }
}
?>

</body>
</html>   
</body>
</html>