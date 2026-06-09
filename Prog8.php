<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       error_reporting(0);
     ?>
     
     <form method="get">
        <input type="text" name="uname">
        <input type="submit" name"submit" value="submit">
</form>
<?php
        $nm = $_GET['uname'];
        echo "Hello, " .$nm;
 ?>       
</body>
</html>