<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "test");

        if ($conn->connect_error) {
            die("Connection Failed : " . $conn->connect_error);
        }

        $sql = "SELECT
        LPAD('PHP',8,'*') AS LPad,
        RPAD('PHP',8,'*') AS RPad,
        LOCATE('SQL','MySQL Database') AS Locate";

        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "LPAD : " . $row['LPad'] . "<br>";
                echo "RPAD : " . $row['RPad'] . "<br>";
                echo "LOCATE : " . $row['Locate'];
            }
        } else {
            echo "Query Error : " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>