<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<h2>Calculator</h2>

<form method="post">
    Enter Number 1: <input type="number" name="n1" required><br><br>
    Enter Number 2: <input type="number" name="n2" required><br><br>

    <select name="op">
        <option value="add">Addition(+)</option>
        <option value="sub">Subtraction(-)</option>
        <option value="mul">Multiplication(*)</option>
        <option value="div">Division(/)</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php

function calculator($a, $b, $op) {
    switch ($op) {
        case "add": return $a + $b;
        case "sub": return $a - $b;
        case "mul": return $a * $b;
        case "div":
            return ($b != 0) ? $a / $b : "Cannot divide by zero";
        default: return "Invalid Operation";
    }
}

if (isset($_POST['submit'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    $result = calculator($n1, $n2, $op);

    echo "<h3>Result: $result</h3>";
}

?>

</body>
</html>