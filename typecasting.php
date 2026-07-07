<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var = "12345";
    echo "<b>Original value:</b>" . $var . "<br>";
    echo"<b>original data type:</b> " . gettype($var). "<br><br>";
    settype($var,"integer");
    echo"<b>after type casting:</b> " . $var . "<br>" ;
    echo"<b>new data type:</b>" . gettype($var)."<br><br>";
    settype($var,"double");
    echo"<b>after converting to double:</b>" . $var . "<br>";
    echo"<b>data type:</b> " . gettype($var). "<br><br>";
    settype($var,"boolean");
    echo"<b>after converting to boolean:</b>";
    var_dump($var);
    echo "<br><b>data type:</b>". gettype($var);
    ?>
</body>
</html>